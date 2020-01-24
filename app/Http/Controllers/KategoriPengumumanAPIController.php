<?php

namespace App\Http\Controllers;
use App\KategoriPengumuman;
use Illuminate\Http\Request;

class KategoriPengumumanAPIController extends Controller
{
    //
    public function index()
    {
        $kategoriPengumuman=KategoriPengumuman::orderBy('id','desc')->get();

        return $kategoriPengumuman;
    }
    public function store(Request $request)
    {
        $input=$request->all();

        $kategoriPengumuman=KategoriPengumuman::create($input);

        return $kategoriPengumuman;
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        $kategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($KategoriPengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        
        $kategoriPengumuman->update($input);

        return response()->json($artikel);
    }
    public function destroy($id)
    {
        $kategoriPengumuman=KategoriPengumuman::find($id);

        if(empty($kategoriPengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);

        }

        $kategoriPengumuman->delete();

        return response()->json(['data telah dihapus']);
}
}
