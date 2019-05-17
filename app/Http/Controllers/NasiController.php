<?php

namespace App\Http\Controllers;

use App\Nasi;
use Illuminate\Http\Request;

class NasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nasi = Nasi::all();
        return view('nasi.index',compact('nasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nasi = new Nasi;
        $nasi->nama_makanan = $request->nama_makanan;
        $nasi->save();
        return redirect()->route('nasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nasi  $nasi
     * @return \Illuminate\Http\Response
     */
    public function show(Nasi $nasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nasi  $nasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Nasi $nasi)
    {
        return view('nasi.edit',compact('nasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nasi  $nasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nasi $nasi)
    {
        $nasi= Nasi::findOrFail($nasi->id);
        $nasi->nama_makanan= $request->nama_makanan;
        $nasi->save();
        return redirect()->route('nasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nasi  $nasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nasi $nasi)
    {
        $nasi = Nasi::findOrFail($nasi->id);
        $nasi->delete();
        return redirect()->route('nasi.index');
    }
}
