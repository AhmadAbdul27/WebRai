<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasi extends Model
{
    protected $fillable = ['nama_makanan'];
    public $timestamp = true;

    public function makan()
    {
    	return $this->hasMany('App\makanan', 'makanan');
    }
}
