<?php

namespace App\Http\Controllers;
use App\Berita;
use Illuminate\Http\Request;

class BeritaAPIController extends Controller
{
    //
     //
     public function index()
     {
         $beritas=Berita::orderBy('id','desc')->get();
 
         return $beritas;
     }
     public function store(Request $request)
     {
         $input=$request->all();
 
         $berita=Berita::create($input);
 
         return $berita;
     }
     public function update(Request $request, $id)
     {
         $input=$request->all();
 
         $berita=Berita::find($id);
 
         if(empty($berita)){
             return response()->json(['message'=>'data tidak ditemukan'],404);
         }
         
         $berita->update($input);
 
         return response()->json($berita);
     }
     public function destroy($id)
     {
         $berita=Berita::find($id);
 
         if(empty($berita)){
             return response()->json(['message'=>'data tidak ditemukan'],404);
 
         }
 
         $berita->delete();
 
         return response()->json(['data telah dihapus']);
 }
}
