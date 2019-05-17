<?php

namespace App\Http\Controllers;
use App\kategori_makanan;
use App\makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = makanan::all();
        return view('makanan.index',compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_makanan= kategori_makanan::all();
         return view('makanan.create',compact('kategori_makanan'));
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
            'makanan' => 'required|max:255',
            'id_kategori_makanan' => 'required'   
        ]);

        $makanan = new makanan;
        $makanan->makanan = $request->makanan;
        $makanan->id_kategori_makanan = $request->id_kategori_makanan;
        $makanan->foto = $request->foto;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath=public_path().'/assets/hangout/img/';
            $uploadSucces= $file->move($destinationPath,$filename);
            $makanan->foto= $filename;
        }
        $makanan->save();
        return redirect()->route('makanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = makanan::findOrFail($id);
         $kategori_makanan = kategori_makanan::all();
         $selectedKategori_Makanan = makanan::findOrFail($id)->id_makanan;
        return view('makanan.edit',compact('makanan','kategori_makanan','selectedKategori_Makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'makanan' => 'required|max:255',
            'id_kategori_makanan' => 'required',   
        ]);
        $makanan = makanan::findOrFail($id);
        $makanan->makanan = $request->makanan;
        $makanan->id_kategori_makanan = $request->id_kategori_makanan;
        $makanan->foto = $request->foto;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath=public_path().'/assets/hangout/img/';
            $uploadSucces= $file->move($destinationPath,$filename);
            $makanan->foto= $filename;
        }
        $makanan->save();
        return redirect()->route('makanan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = makanan::findOrFail($id);
        $makanan->delete();
        return redirect()->route('makanan.index');
    }
}
