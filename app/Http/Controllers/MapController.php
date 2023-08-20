<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MapController extends Controller
{
    public function getdatalocation(){
        
        $lokasi = Map::all();
        return response()->json([
            'data' => $lokasi
        ]);
        
    }

    public function getapidatalocation()
    {
        
        // $response = Http::timeout(60000)->get('http://127.0.0.1:8000/api/getdatalocation');
        $response = Http::get('http://127.0.0.1:5000/api/getdatalocation'); // Ganti URL dengan URL API Anda
        $data = $response->json(); // Konversi respons API menjadi array
        $peta = $data['data']; // Simpan data lokasi dalam variabel $peta

        return view('user.usersparring.tambahsparringnew', compact('peta'));

    }

    public function index(){
        $map = Map::all();
        session()->flash('page', 'peta');
        return view('home.peta.home', compact('map'));
    }

    public function tambah(){
        $map = Map::all();
        session()->flash('page', 'peta');
        return view('home.peta.add', compact(['map']));
    }

    public function store(Request $request){

        // dd($request->all());
        $this->validate($request, rules: [
            'title_lokasi' => 'required',
            'detail_lokasi' => 'required',
            'harga_sewa_lokasi' => 'required',
            'embed_google_map' => 'required',
        ]);

        Map::create([
            'title_lokasi' => $request->title_lokasi,
            'detail_lokasi' => $request->detail_lokasi,
            'harga_sewa_lokasi' => $request->harga_sewa_lokasi,
            'embed_google_map' => $request->embed_google_map,
        ]);

        session()->flash('notification', 'Peta berhasil di tambah');
        return redirect('/peta');
    }

    public function destroy($id){
        $map = Map::findOrFail($id);
        $map->delete();

        return redirect('/peta')->with('success', 'Peta berhasil dihapus.');
    }

    public function detaildestroy($id){
        $map = Map::find($id);
        // return redirect('/peta#exampleModal');
        return redirect()->route('home.peta.home') . '#exampleModal';
    }

    public function edit($id)
    {
        // dd($id);
        $map = Map::find($id);
        session()->flash('page', 'peta');
        return view('home.peta.edit', compact(['map']));
    }

    public function update($id, Request $request ){
        // dd($request->all());
        $map = Map::find($id);
        session()->flash('page', 'peta');

        $map->update([
            'title_lokasi' => $request->title_lokasi,
            'detail_lokasi' => $request->detail_lokasi,
            'harga_sewa_lokasi' => $request->harga_sewa_lokasi,
            'embed_google_map' => $request->embed_google_map,
        ]);
        return redirect('/peta');
    }
}
