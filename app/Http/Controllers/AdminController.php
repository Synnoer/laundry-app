<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Membership_Type;

class AdminController extends Controller
{
    private function checkAdmin()
    {
        if (auth()->user()->role_id != 1) {
            return false;
        }
        return true;
    }
    public function home()
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }

        $totalUsers = User::count();
        $totalOrders = Order::count();
        $pendingOrders = Order::where('status', '<', 7)->count();

        return view('admin.home', compact('totalUsers', 'totalOrders', 'pendingOrders'));
    }

    public function userlist()
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }
        $users = User::with(['role', 'membership.membershiptype'])->get();
        $membership_types = Membership_Type::all();
        
        return view('/admin/userlist', compact('users', 'membership_types'));
    }

    public function updateMembership(Request $request)
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }
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

    public function deleteUser(User $user)
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }
        $user->delete();
        return redirect()->route('admin.userlist')->with('success', 'User deleted successfully.');
    }

    public function orderlist()
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }
        $users = User::with(['role', 'membership.membershiptype'])->get();
        $orders = Order::all();
        foreach ($orders as $order) {
            $order->product_details = json_decode($order->product_details, true);
        }              
        return view("/admin/orderlist", compact('users', 'orders'));
    }

    public function nextStatus(Order $order)
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }
        if ($order->status < 7) {
            $order->status += 1;
            $order->save();
        }
        return redirect()->route('admin.orderlist')->with('success', 'Order status updated successfully.');
    }

    public function editdatabase()
    {
        if (!$this->checkAdmin()) {
            return redirect('/dashboard')->withErrors(['message' => 'You do not have access to the admin page.']);
        }
        return view("/admin/editdatabase");
    }

}