<?php

namespace App\Http\Controllers;
use App\KategoriGaleri;
use Illuminate\Http\Request;

class KategoriGaleriAPIController extends Controller
{
    //
    public function index()
    {
        $kategoriGaleri=KategoriGaleri::orderBy('id','desc')->get();

        return $kategoriGaleri;
    }
    public function store(Request $request)
    {
        $input=$request->all();

        $kategoriGaleri=KategoriGaleri::create($input);

        return $kategoriGaleri;
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        $kategoriGaleri=KategoriGaleri::find($id);

        if(empty($KategoriGaleri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        
        $kategoriGaleri->update($input);

        return response()->json($artikel);
    }
    public function destroy($id)
    {
        $kategoriGaleri=KategoriGaleri::find($id);

        if(empty($kategoriGaleri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);

        }

        $kategoriGaleri->delete();

        return response()->json(['data telah dihapus']);
}
}
