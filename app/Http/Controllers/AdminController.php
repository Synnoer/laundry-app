<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    $request->validate([
        'membership_id' => 'required|exists:membership_types,id',
    ]);
    
    $user = User::findOrFail($request->input('user_id'));
    $membership = $user->membership;
    
    if ($membership) {
        $membership->membership_type_id = $request->input('membership_id');
        $membership->save();

        return response()->json(['message' => 'Membership updated successfully!'], 200);
    }

    return response()->json(['message' => 'Membership not found'], 404);
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