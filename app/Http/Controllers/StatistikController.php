<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        session()->flash('page', 'statistik');
        return view('home.statistik.home', compact(['user']));
    }
}
