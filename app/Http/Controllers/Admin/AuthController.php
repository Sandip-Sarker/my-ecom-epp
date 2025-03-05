<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\User;
use function back;

class AuthController extends Controller
{

    public function login()
    {
        return view('backend.auth.login');
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        $check =  $request->only(['email', 'password']);

        if(Auth::attempt($check))
        {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back()->with('error', 'credentials do not match our records');
    }

    public function registration()
    {
        return view('backend.auth.registration');
    }

    public function registrationStore(Request $request)
    {
        $user               = new User();
        $user->name         = $request->name;
        $user->phone        = $request->phone;
        $user->user_type    = "admin";
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Registration Successfully');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout Successful');
    }

}
