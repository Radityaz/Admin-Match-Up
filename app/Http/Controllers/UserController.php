<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        session()->flash('page', 'pengguna');
        return view('home.pengguna.home', compact(['user']));
    }

    public function index2(){
        $user = DB::table('users')->get();
        session()->flash('page', 'pengguna');

        return view('home.pengguna.home', compact(['user']));
    }

    public function detail($id){
        $user = DB::table('users')->find($id);
        session()->flash('page', 'pengguna');
        // dd($user);
        return view('home.pengguna.detail', compact(['user']));
    }

    public function detail2($id){
        $user = DB::table('users')->find($id);
        return view('home.pengguna.detail', compact(['user']));
    }

    public function destroy($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect('/pengguna');
    }

    public function search(Request $request){


        $searchtitle = $request->input('search');
        // $usernamesearch = $request->input('search');
        $user = User::query();

        if ($searchtitle) {
            $user->where('name', 'like', '%'.$searchtitle.'%');
        }

        // if ($usernamesearch) {
        //     $user->where('username', 'like', '%'.$usernamesearch.'%');
        // }

        $user = $user->get();

        return view('home.pengguna.home', compact(['user']));
    }

    
}
