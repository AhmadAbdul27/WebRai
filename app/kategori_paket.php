<?php

namespace App;
use Session;
use Illuminate\Database\Eloquent\Model;

class kategori_paket extends Model
{
    protected $fillable = array('kategori_paket', 'foto');
    public $timestamps  =true;

    public function paket()
    {
    	return $this->hasMany('App\paket','id_kategori_paket');
    }

    public static function boot()
    {
    	parent::boot();
    	self::deleting(function($kategori_paket)
    	{
    		if ($kategori_paket->paket->count() > 0) 
    		{
    			$html = 'kategori paket tidak bisa di hapus karena masih memiliki paket : ';
    			$html .= '<ul>';
    			foreach ($kategori_paket->paket as $data) {
    				$html .= "<li>$data->nama_paket</li>";
    			}
    			$html .= '</ul><br> Silahkan hapus paket terlebih dahulu.';
    			Session::flash("flash_notification",[
    				"level"=>"danger",
    				"message"=>$html
    			]);
    			return false;
    		}
    	});
    }
}
