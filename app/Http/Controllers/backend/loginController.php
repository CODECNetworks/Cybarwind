<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    public function loginsave(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('error', 'Please correct the errors and try again.');
        }
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            if (Auth::user()->role == 1) {
                session()->flash('success', 'You have logged in successfully!');
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->with('error', 'You are not authorized to access this page.');
            }
        }
    
        return back()->with('error', 'These credentials do not match our records.');
    }
    
    
        // return view('backend.login');
    }


