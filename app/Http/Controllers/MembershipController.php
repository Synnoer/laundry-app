<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MembershipController extends Controller
{
    public function index()
    {
        return view('membership/member');
    }
    public function silver()
    {
        return view('membership/silver');
    }
    public function gold()
    {
        return view('membership/gold');
    }
    public function platinum()
    {
        return view('membership/platinum');
    }
}
