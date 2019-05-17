<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class kategori_makanan extends Model
{
    protected $fillable = array('kategori_makanan');
    public $timestamps  =true;

    public function makanan()
    {
    	return $this->hasMany('App\makanan','id_kategori_makanan');
    }

    public static function boot()
    {
    	parent::boot();
    	self::deleting(function($kategori_makanan)
    	{
    		if ($kategori_makanan->makanan->count() > 0) 
    		{
    			$html = 'kategori makanan tidak bisa di hapus karena masih memiliki makanan : ';
    			$html .= '<ul>';
    			foreach ($kategori_makanan->makanan as $data) {
    				$html .= "<li>$data->makanan</li>";
    			}
    			$html .= '</ul><br> Silahkan hapus makanan terlebih dahulu.';
    			Session::flash("flash_notification",[
    				"level"=>"danger",
    				"message"=>$html
    			]);
    			return false;
    		}
    	});
    }
}
