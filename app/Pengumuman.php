<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    //
    protected $table='kategori_pengumuman';

    protected $fillable=[
       'judul','isi','user_id','kategori_pengumuman_id'
    ];

    public function pengumuman(){
        return $this->hasMany(\App\KategoriPengumuman::class,'kategori_pengumuman_id','id
        ');
    }
    public function user(){
        return $this->belongsTo(\App\User::class,'user_id','id');
    }


}
