<?php

namespace App\Http\Controllers;
use App\kategori_paket;
use App\paket;
use App\makanan;
use Session;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = paket::all();
        return view('paket.index',compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_paket= kategori_paket::all();
        $makanan= makanan::all();
         return view('paket.create',compact('kategori_paket','makanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_paket' => 'required',
            'harga' => 'required|max:255',
            'id_kategori_paket' => 'required',
            'id_makanan' => 'required'   
        ]);

        $paket = new paket;
        $paket->nama_paket = $request->nama_paket;
        $paket->harga = $request->harga;
        $paket->id_kategori_paket = $request->id_kategori_paket;
        $paket->save();
        $paket->makanan()->attach($request->id_makanan);
        
        return redirect()->route('paket.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(paket $paket)
    {
         $paket = paket::findOrFail($paket->id);
         $kategori_paket = kategori_paket::all();
         $makanan = makanan::all();
         $selectedKategori_Paket = paket::findOrFail($paket->id);
         $selected = $paket->makanan->pluck('id')->toArray();
        return view('paket.edit',compact('paket','kategori_paket','makanan','selectedKategori_Paket','selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paket $paket)
    {
        $this->validate($request,[
            'nama_paket' => 'required|max:255' ,  
            'harga' => 'required|max:255',
            'id_makanan' => 'required',
            'id_kategori_paket' => 'required'
        ]);
        $paket = paket::findOrFail($paket->id);
        $paket->nama_paket = $request->nama_paket;
        $paket->harga = $request->harga;
        $paket->id_kategori_paket = $request->id_kategori_paket;
        $paket->makanan()->sync($request->id_makanan);
        $paket->save();
        return redirect()->route('paket.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(paket $paket)
    {
        $paket = paket::findOrFail($paket->id);
        $paket->delete();
        return redirect()->route('paket.index');
    }
}
