<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrderController extends Controller
{

     public function review(Request $request): View
    {
        return view('profile.view', [
            'user' => $request->user(),
        ]);
    }


    public function next(Request $request): RedirectResponse
    {
        return Redirect::to('/');
    }
}
