<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showlogin()
    {
        return view('index.main');
    }

    public function login(Request $request)
    {
        // $user = Auth::user();
        // session(['user_id' => $user->id]);

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'kode' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
            'kode.required' => 'Kode wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
            'kode' => $request->kode,
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/statistik')->with('notification', 'Welcome');
        }else{
            return 'gagal';
            // return redirect('/')->with('error', 'true');
        }
    }
}
