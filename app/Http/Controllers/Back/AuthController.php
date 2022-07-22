<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('back.auth');
    }

    public function login_submit(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        return Auth::attempt($credentials)
            ? redirect()->route('admin.dashboard')
            : redirect()->back()->with('error', 'The entered Username or Password is incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
