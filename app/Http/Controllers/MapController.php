<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        $map = Map::all();

        return view('home.peta.home', compact('map'));
    }

    public function tambah(){
        $map = Map::all();
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
        return view('home.peta.edit', compact(['map']));
    }

    public function update($id, Request $request ){
        // dd($request->all());
        $map = Map::find($id);
        $map->update([
            'title_lokasi' => $request->title_lokasi,
            'detail_lokasi' => $request->detail_lokasi,
            'harga_sewa_lokasi' => $request->harga_sewa_lokasi,
            'embed_google_map' => $request->embed_google_map,
        ]);
        return redirect('/peta');
    }
}
