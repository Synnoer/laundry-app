<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Order;

class DashboardController extends Controller
{
    public function home()
    {
        // Fetch only the ongoing orders for the logged-in user
        $ongoingOrders = Order::where('user_id', auth()->id())
                            ->where('completion_estimation_date', '>=', now())
                            ->where('status', '<', '7')
                            ->get();
        foreach ($ongoingOrders as $order) {
            $order->product_details = json_decode($order->product_details, true);
        }               
        
        $recentOrders = Order::where('user_id', auth()->id())
                            ->where('status', '7')
                            ->get();
        foreach ($recentOrders as $order) {
            $order->product_details = json_decode($order->product_details, true);
        }  
        return view("home.dashboard", compact('ongoingOrders', 'recentOrders'));
    }
    public function ongoing()
    {
        $Orders = Order::where('order_id')->get();
        return view('home/ongoing-laundry');
    }

    public function notification()
    {
        return view('home/notification');
    }
    public function about()
    {
        return view('home/about');
    }
}
