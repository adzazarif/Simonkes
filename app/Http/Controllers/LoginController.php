<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("authentication.login");
    }

    public function register(){
        return view("authentication.register");
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('dashboard');
        }
 
        return back()->withErrors([
            'err' => 'Email atau password salah',
        ])->onlyInput('err');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=> ['required'],
            'username'=> ['required'],
            'password'=> ['required'],
        ]);

        User::create([
            'email'=> $request->email,
            'name'=> $request->username,
            'password'=> bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('success','Data berhasil ditambahkan');
    }
}
