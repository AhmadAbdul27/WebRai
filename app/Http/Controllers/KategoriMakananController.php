<?php

namespace App\Http\Controllers;

use App\kategori_makanan;
use Illuminate\Http\Request;

class KategoriMakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kategori_makanan = kategori_makanan::all();
        return view('kategorimakanan.index',compact('kategori_makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategorimakanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori_makanan = new kategori_makanan;
        $kategori_makanan->kategori_makanan = $request->kategori_makanan;
        $kategori_makanan->save();
        return redirect()->route('kategori_makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_makanan  $kategori_makanan
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_makanan $kategori_makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_makanan  $kategori_makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_makanan $kategori_makanan)
    {
        return view('kategorimakanan.edit',compact(
            'kategori_makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_makanan  $kategori_makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_makanan $kategori_makanan)
    {
        $kategori_makanan= kategori_makanan::findOrFail($kategori_makanan->id);
        $kategori_makanan->kategori_makanan= $request->kategori_makanan;
        $kategori_makanan->save();
        return redirect()->route('kategori_makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_makanan  $kategori_makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!kategori_makanan::destroy($id))return redirect()->back();
        $kategori_makanan = kategori_makanan::findOrFail($id);
        $kategori_makanan->delete();
        return redirect()->route('kategori_makanan.index');
    }
}
