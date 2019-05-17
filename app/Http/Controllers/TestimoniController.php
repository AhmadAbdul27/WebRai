<?php

namespace App\Http\Controllers;

use App\testimoni;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = testimoni::all();
        return view('testimoni.index',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimoni = new testimoni;
        $testimoni->nama_pelanggan = $request->nama_pelanggan;
        $testimoni->testi = $request->testi;
        $testimoni->save();
        return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni)
    {
        return view('testimoni.edit',compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimoni $testimoni)
    {
        $testimoni= testimoni::findOrFail($testimoni->id);
        $testimoni->nama_pelanggan = $request->nama_pelanggan;
        $testimoni->testi = $request->testi;
        $testimoni->save();
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimoni $testimoni)
    {
        $testimoni = testimoni::findOrFail($testimoni->id);
        $testimoni->delete();
        return redirect()->route('testimoni.index');
    }
}
