<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KompetisiController extends Controller
{   
    public function index(){
        $kompetisi = DB::table('kompetisi')->get();
        return view('home.kompetisi.home', compact(['kompetisi']));
    }

    public function tambah(){
        $kompetisi = DB::table('kompetisi')->get();
        return view('home.kompetisi.add', compact(['kompetisi']));
    }

    public function store(Request $request){

        // dd($request->all());
        $this->validate($request, rules: [
            'title' => 'required',
            'olahraga' => 'required',
            'deskripsi' => 'required',
            'juara_pertama' => 'required',
            'juara_kedua' => 'required',
            'juara_ketiga' => 'required',
            'lokasi' => 'required',
            'max_member' => 'required',
            'tingkatan' => 'required',
            'tanggal_pertandingan' => 'required',
            'harga_tiket' => 'required',
            'lama_pertandingan' => 'required',
            'waktu_pertandingan' => 'required',
            'deskripsi_tambahan' => 'required',
        ]);

        DB::table('kompetisi')->insert([
            'title' => $request->title,
            'olahraga' => $request->olahraga,
            'deskripsi' => $request->deskripsi,
            'juara_pertama' => $request->juara_pertama,
            'juara_kedua' => $request->juara_pertama,
            'juara_ketiga' => $request->juara_pertama,
            'lokasi' => $request->lokasi,
            'max_member' => $request->max_member,
            'tingkatan' => $request->tingkatan,
            'tanggal_pertandingan' => $request->tanggal_pertandingan,
            'harga_tiket' => $request->harga_tiket,
            'lama_pertandingan' => $request->lama_pertandingan,
            'waktu_pertandingan' => $request->waktu_pertandingan,
            'deskripsi_tambahan' => $request->deskripsi_tambahan,
        ]);

        return redirect('/kompetisi');
    }

    
}
