<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function postLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
    
        return redirect()->back()->withErrors(['invalid_credentials' => 'Invalid credentials']);
    }
    
    public function register()
    {
        return view('auth.register');
    }
    
    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
    
        return redirect()->route('login');
    }
    
    public function logout()
    {
        Auth::logout();
    
        return redirect()->route('home');
    }
}
