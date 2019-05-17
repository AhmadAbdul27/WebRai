<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    protected $fillable = array('nama_pelanggan', 'testi');
    public $timestamps =true;
}
