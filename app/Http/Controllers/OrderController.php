<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;

use App\Models\Menu;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {


        // Assuming you also have other logic here for fetching cart items or other data
        $menus = Menu::all(); // Replace Menu with your actual model name and logic
        return view('cart', compact('menus'));
    }
    public function checkout(Request $request)
    {
        $request->request->add(['total_price' => $request->total_price, 'status' => 'Unpaid']);
        // $request->request->add(['name' => $request->name, 'total_price' => $request->total_price, 'status' => 'Unpaid']);
        $order = Order::create($request->all());

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total_price,
            ),
            'customer_details' => array(
                'first_name' => $request->name,
                'last_name' => '',
                'phone' => $request->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Ambil data item dari formulir
        $menuIds = $request->input('menu_ids');
        $quantities = $request->input('quantities');
        $menus = Menu::all();
        $carts = Cart::all();

        foreach ($menus as $menu) {
            // Cari item cart yang sesuai dengan menu
            $cartItem = $carts->where('menu_id', $menu->id)->first();

            // Jika item cart ditemukan
            if ($cartItem) {
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_name' => $menu->menu_name,
                    'quantity' => $cartItem->quantity, // Gunakan quantity dari cart
                    'total_price' => $cartItem->quantity * $menu->menu_price,
                    // Tambahkan field lain sesuai kebutuhan
                ]);
            }
        }

        return view('checkout', compact('snapToken', 'order'));
    }
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $order = Order::find($request->order_id);
                $order->update(['status' => 'Paid']);
            }
        }
    }
    public function invoice($id)
    {
        $order = Order::find($id);
        return view('invoice', compact('order'));
    }
}
