<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    protected $fillable = array('id_kategori_makanan','makanan');
    public $timestamps = true;

    public function paket()
    {
    	return $this->belongsToMany('App\paket','paket_makanans','id_makanan','id_paket');
    }
    public function kategori_makanan()
    {
    	return $this->belongsTo('App\kategori_makanan','id_kategori_makanan');
    }
    public function nasi()
    {
        return $this->belongsTo('App\Nasi', 'makanan');
    }
}
