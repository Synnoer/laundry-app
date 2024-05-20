<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function member()
    {
        $membership = Membership::all();
        
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
