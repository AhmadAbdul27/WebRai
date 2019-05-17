<?php

namespace App\Http\Controllers;

use App\lauk;
use Illuminate\Http\Request;

class LaukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lauk = lauk::all();
        return view('lauk.index',compact('lauk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lauk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lauk = new lauk;
        $lauk->nama_makanan = $request->nama_makanan;
        $lauk->save();
        return redirect()->route('lauk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lauk  $lauk
     * @return \Illuminate\Http\Response
     */
    public function show(lauk $lauk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lauk  $lauk
     * @return \Illuminate\Http\Response
     */
    public function edit(lauk $lauk)
    {
        return view('lauk.edit',compact('lauk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lauk  $lauk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lauk $lauk)
    {
        $lauk= lauk::findOrFail($lauk->id);
        $lauk->nama_makanan= $request->nama_makanan;
        $lauk->save();
        return redirect()->route('lauk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lauk  $lauk
     * @return \Illuminate\Http\Response
     */
    public function destroy(lauk $lauk)
    {
        $lauk = lauk::findOrFail($lauk->id);
        $lauk->delete();
        return redirect()->route('lauk.index');
    }
}
