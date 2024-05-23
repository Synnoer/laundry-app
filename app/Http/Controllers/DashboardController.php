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
        $orders = Order::with(['product_details'])->get();
        return view("home/dashboard", compact('orders'));
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
