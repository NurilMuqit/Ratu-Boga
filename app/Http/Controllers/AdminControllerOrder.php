<?php

// app/Http/Controllers/AdminControllerOrder.php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminControllerOrder extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status'); // Ambil nilai status dari query string

        // Query pesanan berdasarkan status
        $orders = Order::when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->get();

        return view('admin.Orders', compact('orders', 'status'));
    }
    public function showOrderDetails($orderId)
    {
        $orderDetails = OrderDetail::where('order_id', $orderId)->get();
        $order = Order::findOrFail($orderId);

        return view('admin.OrderDetails', compact('order', 'orderDetails'));
    }
}