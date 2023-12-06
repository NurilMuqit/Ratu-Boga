<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function show()
    {
        // Logika lain yang mungkin Anda butuhkan di sini


        // Mendapatkan dua menu dengan stok paling sedikit
        $lowestStockMenus = Menu::orderBy('menu_quantity')->limit(2)->get();

        // Logika lain yang mungkin Anda butuhkan di sini

        return view('admin.dashboard', ['lowestStockMenus' => $lowestStockMenus]);
    }
}
