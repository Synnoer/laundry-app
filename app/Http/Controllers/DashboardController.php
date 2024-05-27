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
                            ->get();

        foreach ($ongoingOrders as $order) {
            $order->product_details = json_decode($order->product_details, true);
        }               
        
        return view("home.dashboard", compact('ongoingOrders'));
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
