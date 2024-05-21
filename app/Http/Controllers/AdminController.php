<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Order;
use App\Models\Membership;

class AdminController extends Controller
{
    public function home()
    {
        $users = User::with(['role'])->get();
        $orders = Order::with(['user'])->get();
        $memberships = Membership::with('membershipType')->get();

        return view('/admin/admin', compact('users', 'orders', 'memberships'));
    }

    public function updateMembership(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'membership_id' => 'required|exists:memberships,id',
        ]);

        $user = User::findOrFail($request->user_id);
        $user->membership_id = $request->membership_id;
        $user->save();

        return redirect()->route('admin.home')->with('success', 'Membership updated successfully');
    }
}