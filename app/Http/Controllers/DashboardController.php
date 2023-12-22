<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Menu;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function show()
    {


        $lowestStockMenus = Menu::orderBy('menu_quantity')->limit(2)->get();


        $totalOrders = Order::count();

        $totalUsers = User::where('usertype', 0)->count();

        $totalPaidAmount = Order::where('status', 'Paid')->sum('total_price');
        $totalPaidOrders = Order::where('status', 'Paid')->count();

        $orderDetailsLimit = 3; // Set the limit to 3

        $orderDetails = OrderDetail::with('order')
            ->whereHas('order', function ($query) {
                $query->where('status', 'Paid');
            })
            ->limit($orderDetailsLimit)
            ->get();


        return view('admin.dashboard', [
            'lowestStockMenus' => $lowestStockMenus,
            'totalOrders' => $totalOrders,
            'totalUsers' => $totalUsers,
            'totalPaidAmount' => $totalPaidAmount,
            'orderDetails' => $orderDetails,
            'totalPaidOrders' => $totalPaidOrders,
        ]);
    }
}
