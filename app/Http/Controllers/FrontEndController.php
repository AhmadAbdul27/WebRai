<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cabang;
use App\testimoni;
use App\galeri;
use App\makanan;
use App\kategori_makanan;
use App\kategori_paket;
use App\paket;
class FrontEndController extends Controller
{
    public function index()
    {
        $galeri=galeri::all();
        $kategori_makanan=kategori_makanan::all();
        $categori_paket=kategori_paket::all();
        $makanan=makanan::all();
        $testimoni=testimoni::all();
    	return view('frontend.index2',compact('galeri','categori_paket','kategori_makanan','makanan','testimoni'));
    }

    public function cabang()
    {
    	$cabang=cabang::all();
        $categori_paket=kategori_paket::all();
    	return view('cabang.index1',compact('cabang','categori_paket'));
    }

    public function cab()
    {
        $cabang=cabang::all();
        $categori_paket=kategori_paket::all();
        return view('cabang.index2',compact('cabang','categori_paket'));
    }

    public function makanan()
    {
        $kategori_makanan=kategori_makanan::all();
        $makanan=makanan::all();
        $categori_paket=kategori_paket::all();
        return view('makanan.index1',compact('nasi','categori_paket','kategori_makanan','makanan'));
    }

        public function ka_paket()
    {
        $paket=kategori_paket::all();
        return view('kategoripaket.index1',compact('paket'));
    }
    public function isikategoripaket($id)
    {
        $kategori_paket=kategori_paket::findOrFail($id);
        $categori_paket = kategori_paket::all();
        $paket= paket::all();
            return view('kategoripaket.isipaket',compact('categori_paket','kategori_paket','paket'));
    }
    public function isikategorimakanan($id)
    {
        $kategori_makanan=kategori_makanan::findOrFail($id);
        $categori_makanan = kategori_makanan::all();
        $categori_paket=kategori_paket::all();
        $makanan= makanan::all();
            return view('frontend.isimenu',compact('categori_makanan','kategori_makanan','categori_paket','makanan'));
    }
}
