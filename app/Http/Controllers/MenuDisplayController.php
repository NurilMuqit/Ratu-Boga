<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;  
use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class MenuDisplayController extends Controller
{
    public function menuDisplay() {
        $menuDisplay = Menu::all();
        return view('daftar-menu', compact('menuDisplay'));
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

    public function menuDetail($id) {
        $menuDisplay = Menu::findOrFail($id);
        // return $menuDisplay;
        return view('menu-detail', compact('menuDisplay'));
    }
}
