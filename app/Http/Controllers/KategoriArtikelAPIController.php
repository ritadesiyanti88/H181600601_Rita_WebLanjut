<?php

namespace App\Http\Controllers;
use App\KategoriArtikel;
use Illuminate\Http\Request;

class KategoriArtikelAPIController extends Controller
{
    //
     public function index()
     {
         $kategoriArtikels=KategoriArtikel::orderBy('id','desc')->get();
 
         return $kategoriArtikels;
     }
     public function store(Request $request)
     {
         $input=$request->all();
 
         $kategoriartikel=KategoriArtikel::create($input);
 
         return $kategoriArtikel;
     }
     public function update(Request $request, $id)
     {
         $input=$request->all();
 
         $kategoriArtikel=KategoriArtikel::find($id);
 
         if(empty($KategoriArtikel)){
             return response()->json(['message'=>'data tidak ditemukan'],404);
         }
         
         $kategoriArtikel->update($input);
 
         return response()->json($artikel);
     }
     public function destroy($id)
     {
         $kategoriArtikel=KategoriArtikel::find($id);
 
         if(empty($kategoriArtikel)){
             return response()->json(['message'=>'data tidak ditemukan'],404);
 
         }
 
         $kategoriArtikel->delete();
 
         return response()->json(['data telah dihapus']);
 }
}
