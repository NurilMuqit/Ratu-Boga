<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;  
use App\Models\Cart;

use Illuminate\Http\Request;

class MenuDisplayController extends Controller
{
    public function menuDisplay() {
        $menuDisplay = Menu::all();
        return view('daftar-menu', compact('menuDisplay'));
    }

    public function addToCart(Request $req){
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('users')->id;
            $cart->menu_id=$req->menu_id;

            $cart->save();

            return view('daftar-menu', compact('menuDisplay'));
        }
        else {
            return redirect('login');
        }
    }

    public function menuDetail($id) {
        $menuDisplay = Menu::findOrFail($id);
        // return $menuDisplay;
        return view('menu-detail', compact('menuDisplay'));
    }
}
