<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenuDisplayController extends Controller
{
    public function menuDisplay()
    {
        $menuDisplay = Menu::all();
        return view('daftar-menu', compact('menuDisplay'));
    }

    public function menuDetail($id)
    {
        $menuDisplay = Menu::findOrFail($id);
        // return $menuDisplay;
        return view('menu-detail', compact('menuDisplay'));
    }

    public function search(Request $req)
    {
        $data = Menu::where('menu_name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['menuDisplay' => $data]);
    }

    public function addToCart(Request $req)
    {
        if (Auth::check()) {
            // Ambil data menu
            $menu = Menu::find($req->menu_id);

            // Pastikan menu ada dan stok cukup
            if ($menu && $menu->menu_quantity >= $req->quantity) {
                // Mulai transaksi
                DB::beginTransaction();

                try {
                    // Kurangi stok di tabel menus
                    $menu->menu_quantity -= $req->quantity;
                    $menu->save();

                    // Tambahkan ke tabel carts
                    Cart::create([
                        'customer_id' => Auth::id(),
                        'menu_id' => $req->menu_id,
                        'quantity' => $req->quantity,
                        'order_date' => now(),
                    ]);

                    // Commit transaksi jika semuanya berhasil
                    DB::commit();

                    return redirect()->route('daftar-menu')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
                } catch (\Exception $e) {
                    // Rollback transaksi jika terjadi kesalahan
                    DB::rollback();
                    return redirect()->route('daftar-menu')->with('error', 'Error adding product to cart.');
                }
            } else {
                return redirect()->route('daftar-menu')->with('error', 'Product not available or insufficient stock.');
            }
        } else {
            return redirect()->route('login');
        }
    }

    // ...

    // public function addToCart(Request $request, $menuDisplay)
    // {
    //     // Ambil data menu berdasarkan ID
    //     $menu = Menu::find($menuDisplay);

    //     // Pastikan menu ada
    //     if (!$menu) {
    //         return redirect()->back()->with('error', 'Menu not found.');
    //     }

    //     // Lakukan pengecekan apakah menu sudah ada di keranjang user
    //     $existingCart = Cart::where('customer_id', auth()->id())
    //         ->where('menu_id', $menuDisplay)
    //         ->first();

    //     if ($existingCart) {
    //         // Jika sudah ada, tingkatkan jumlah pesanan (quantity)
    //         $existingCart->quantity += 1;
    //         $existingCart->save();
    //     } else {
    //         // Jika belum ada, tambahkan menu baru ke keranjang
    //         Cart::create([
    //             'customer_id' => auth()->id(),
    //             'menu_id' => $menuDisplay,
    //             'quantity' => 1, // Sesuaikan dengan field quantity di tabel Cart
    //             'order_date' => now(),
    //         ]);
    //     }

    //     return redirect()->back()->with('success', 'Menu added to cart successfully.');
    // }



    public static function cartItem()
    {
        $customerId = Auth::id();
        return Cart::where('customer_id', $customerId)->count();
    }

    public function cartList()
    {
        $customerId = Auth::id();
        $menuDisplay = DB::table('carts')
            ->join('menus', 'carts.menu_id', '=', 'menus.id')
            ->join('users', 'carts.customer_id', '=', 'users.id')
            ->where('carts.customer_id', '=', $customerId)
            ->select('menus.*', 'carts.id as cart_id', 'carts.quantity') // Pastikan menambahkan kolom quantity
            ->get();
        // return view('cart', ['menus' => $menuDisplay]);
        $totalPrice = $menuDisplay->sum(function ($item) {
            return $item->quantity * $item->menu_price;
        });
        return view('cart', ['menus' => $menuDisplay, 'totalPrice' => $totalPrice]);
    }

    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cart-list');
    }
}
