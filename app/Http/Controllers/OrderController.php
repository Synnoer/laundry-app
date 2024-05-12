<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index()
    {
        return view('order/laundry');
    }
    public function add()
    {
        return view('order/add-laundry');
    }
    public function detail()
    {
        return view('order/details-laundry');
    }
}
