<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    protected $fillable = array('id_makanan','id_kategori_paket','harga','nama_paket','makanan');
    public $timestamps =true;

    public function kategori_paket()
    {
    	return $this->belongsTo('App\kategori_paket','id_kategori_paket');
    }

    public function makanan()
    {
        return $this->belongsToMany('App\makanan','paket_makanans','id_paket','id_makanan');
    }
}
