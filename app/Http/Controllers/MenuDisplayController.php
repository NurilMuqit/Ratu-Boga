<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;  

use Illuminate\Http\Request;

class MenuDisplayController extends Controller
{
    public function menuDisplay() {
        $menuDisplay = Menu::all();
        return view('daftar-menu', compact('menuDisplay'));
    }

    public function menuDetail($id) {
        $menuDisplay = Menu::find($id);
        // return $menuDisplay;
        return view('menu-detail', compact('menuDisplay'));
    }
}
