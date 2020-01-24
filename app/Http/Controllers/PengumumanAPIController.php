<?php

namespace App\Http\Controllers;
use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanAPIController extends Controller
{
    //
    public function index()
    {
        $pengumumans=Pengumuman::orderBy('id','desc')->get();

        return $pengumumans;
    }
    public function store(Request $request)
    {
        $input=$request->all();

        $pengumuman=Pengumuman::create($input);

        return $pengumuman;
    }
    public function update(Request $request, $id)
    {
        $input=$request->all();

        $pengumuman=Pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        
        $pengumuman->update($input);

        return response()->json($artikel);
    }
    public function destroy($id)
    {
        $pengumuman=Pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);

        }

        $pengumuman->delete();

        return response()->json(['data telah dihapus']);
}

}
