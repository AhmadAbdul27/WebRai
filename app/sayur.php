<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sayur extends Model
{
    protected $fillable = ['nama_makanan'];
    public $timestamp = true;
}
