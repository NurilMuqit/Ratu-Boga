<?php

namespace App\Http\Controllers;

use App\Models\Menu;  
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenuDisplayController extends Controller
{
    public function menuDisplay() {
        $menuDisplay = Menu::all();
        return view('daftar-menu', compact('menuDisplay'));
    }

    public function menuDetail($id) {
        $menuDisplay = Menu::findOrFail($id);
        // return $menuDisplay;
        return view('menu-detail', compact('menuDisplay'));
    }

    public function search(Request $req) {
        $data = Menu::where('menu_name', 'like', '%'.$req->input('query').'%')->get();
        return view('search', ['menuDisplay'=>$data]);
    }

    public function addToCart(Request $req) {
        if (Auth::check()){
            Cart::create([
                'customer_id' => Auth::id(),
                'menu_id' => $req->menu_id,
                'order_date' => now(), 
            ]);

            return redirect()->route('daftar-menu')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
        } else {
            return redirect()->route('login');
        }
    }

    public static function cartItem() {
        $customerId = Auth::id();
        return Cart::where('customer_id', $customerId)->count();
    }

    public function cartList() {
        $customerId = Auth::id();
        $menuDisplay = DB::table('carts')
        ->join('menus', 'carts.menu_id', '=', 'menus.id')
        ->join('users', 'carts.customer_id', '=', 'users.id')
        ->where('carts.customer_id', '=', $customerId)
        ->select('menus.*', 'carts.id as cart_id')
        ->get();

        return view('cart', ['menus' => $menuDisplay]);
    }

    public function removeCart($id) {
        Cart::destroy($id);
        return redirect('cart-list');
    }
}
