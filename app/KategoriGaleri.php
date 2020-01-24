<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    //
    protected $table='kategori_galeri';

    protected $fillable=[
        'nama','user_id'
    ];

    public function galeris(){
        return $this->hasMany(\App\Galeri::class,'kategori_galeri_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\User::class,'user_id','id');
    }


}
