<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Order;
use App\Models\Membership_Type;

class AdminController extends Controller
{
    public function home()
    {
        return view('/admin/home');
    }

    public function userlist()
    {
        $users = User::with(['role', 'membership.membershiptype'])->get();
        $membership_types = Membership_Type::all();
        
        return view('/admin/userlist', compact('users', 'membership_types'));
    }

    public function updateMembership(Request $request)
    {
        $user = User::find($request->input('user_id'));
        $user->membership_id = $request->input('membership_id');
        $user->save();

        return redirect()->route('/admin/home')->with('success', 'Membership updated successfully');
    }

    public function orderlist()
    {
        $users = User::with(['role', 'membership.membershiptype'])->get();
        $orders = Order::with(['user', 'product_details'])->get();
        return view("/admin/orderlist", compact('users', 'orders'));
    }

    public function editdatabase()
    {
        return view("/admin/editdatabase");
    }

}