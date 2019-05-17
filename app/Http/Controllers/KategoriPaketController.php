<?php

namespace App\Http\Controllers;

use App\kategori_paket;
use Illuminate\Http\Request;

class KategoriPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_paket = kategori_paket::all();
        return view('kategoripaket.index',compact('kategori_paket'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategoripaket.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori_paket = new kategori_paket;
        $kategori_paket->kategori = $request->kategori;
        $kategori_paket->foto = $request->foto;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath=public_path().'/assets/hangout/img/';
            $uploadSucces= $file->move($destinationPath,$filename);
            $kategori_paket->foto= $filename;
        }
        $kategori_paket->save();
        return redirect()->route('kategori_paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_paket  $kategori_paket
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_paket $kategori_paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_paket  $kategori_paket
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_paket $kategori_paket)
    {
        return view('kategoripaket.edit',compact(
            'kategori_paket'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_paket  $kategori_paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_paket $kategori_paket)
    {
        $kategori_paket= kategori_paket::findOrFail($kategori_paket->id);
        $kategori_paket->kategori= $request->kategori;
        $kategori_paket->foto = $request->foto;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath=public_path().'/assets/hangout/img/';
            $uploadSucces= $file->move($destinationPath,$filename);
            $kategori_paket->foto= $filename;
        }
        $kategori_paket->save();
        return redirect()->route('kategori_paket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_paket  $kategori_paket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!kategori_paket::destroy($id))return redirect()->back();
        $kategori_paket = kategori_paket::findOrFail($kategori_paket->id);
        $kategori_paket->delete();
        return redirect()->route('kategori_paket.index');
    }
}
