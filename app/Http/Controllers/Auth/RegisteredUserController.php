<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Membership;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create the user
        $membership = Membership::create([
            'join_date' => now(),
            'end_date' => now()->addDays(2), // Set an end date one year from now
            'session_left' => 0,
            'membership_type_id' => 1, // Default membership type
        ]);
    
        // Create the user and associate the membership with the user
        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'avatar_url' => $request->avatar_url,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'membership_id' => $membership->id, // Associate the membership with the user
        ]);

        // Fire the Registered event
        event(new Registered($user));

        // Login the user
        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
