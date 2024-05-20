<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function index(): View
    {
        $orders = Order::all();
        return view('order.laundry', compact('orders'));
    }

    public function add(): View
    {
        return view('order.add-laundry');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'product_description' => 'required',
            'quantity' => 'required|integer',
            'total_weight' => 'required|numeric',
            'service' => 'required',
            'fragrance' => 'required',
            'total_price' => 'required|numeric',
            'subtotal' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'order_date' => 'required|date',
            'completion_estimation_date' => 'required|date'
        ]);

        Order::create($request->all());

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function detail(Order $order): View
    {
        return view('order.details-laundry', compact('order'));
    }
}
