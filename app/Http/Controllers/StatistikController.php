<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatistikController extends Controller
{
    public function index(){

        $pengguna = Auth::user();
        $user = DB::table('users')->get();
        $sparring = DB::table('usersparring')->get();
        $mabar = DB::table('usermabar')->get();
        $tim = DB::table('usertim')->get();
        
        session()->flash('page', 'statistik');
        // dd($user);
        return view('home.statistik.home', compact(['user', 'sparring', 'mabar', 'tim', 'pengguna']));
    }

}
