<?php

namespace App\Http\Controllers;
use App\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaAPIController extends Controller
{
    //
    public function index()
    {
        $kategoriBeritas=KategoriBerita::orderBy('id','desc')->get();

        return $kategoriBeritas;
    }
    public function store(Request $request)
    {
        $input=$request->all();

        $kategoriBerita=KategoriBerita::create($input);

        return $kategoriBerita;
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        $kategoriBerita=KategoriBerita::find($id);

        if(empty($KategoriBerita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        
        $kategoriBerita->update($input);

        return response()->json($berita);
    }
    public function destroy($id)
    {
        $kategoriBerita=KategoriBerita::find($id);

        if(empty($kategoriBerita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);

        }

        $kategoriBerita->delete();

        return response()->json(['data telah dihapus']);
}
}
