<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class authController extends Controller
{
    public function login(Request $request)
{
    // Validate the login input
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return back()->withErrors($validator);
    }

    // Attempt to log in the user with Auth::attempt
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        // Check if the logged-in user is an admin
        if (Auth::user()->role == 1 ) {
            session()->flash('success', 'You have logged in successfully.!');
            return redirect()->route('admin.dashboard');  // Redirect to the admin dashboard
        } else {
            // Logout and redirect with an error if the user is not authorized
            Auth::logout();
            return redirect()->route('admin.login')->withErrors('You are not authorized to access this page');
        }
    }

    // If authentication fails, redirect back with an error
    return back()->withErrors([
        'email' => 'These credentials do not match our records.',
    ]);
}

}
