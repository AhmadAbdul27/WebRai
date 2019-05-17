<?php

namespace App\Http\Controllers;

use App\cabang;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\DataTables;

class CabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function_construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function json(){
    //     $cabang = cabang::all();
    //     return DataTables::off($cabang)
    //     ->addColumn('action',function($cabang){
    //         return '<center><a href="#" class="btn btn-primary edit" data-id "'.$cabang->id.'><i class="glyphicon glyphicon-edit"></i> Edit</a> | <a href="#" class="btn btn-xs btn-danger delete"id="'.$cabang->id.'"><i class="glyphicon glyphicon-remove"</i> Delete</a></center>';
    //     })
    //     ->rawcolums(['action'])->make(true);

    // }
    public function index()
    {
        $cabang = cabang::all();
        return view('cabang.index',compact('cabang'));
    }

    // function removedata(Request $request)
    // {
    //     $cabang= cabang::find($request->input('id'));
    //     if($cabang->delete())
    //     {
    //         echo 'Data Delete';
    //     }
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cabang.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'cabang'=>'required'
        // ],[
        //     'cabang.required'=>'cabang tidak boleh kosong'
        // ]);
        $cabang = new cabang;
        $cabang->alamat = $request->alamat;
        $cabang->foto = $request->foto;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath=public_path().'/assets/hangout/img/';
            $uploadSucces= $file->move($destinationPath,$filename);
            $cabang->foto= $filename;
        }
        $cabang->save();
        return redirect()->route('cabang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function show(cabang $cabang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function edit(cabang  $cabang)
    {
        // $cabang = cabang::findOrFail($id);
        // return $cabang;
        return view('cabang.edit',compact(
            'cabang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,cabang $cabang)
    {
        // $this->validate($request,[
        //     'cabang'=>'required'
        // ],[
        //     'cabang.required'=>'cabang tidak boleh kosong'
        // ]);
        $cabang= cabang::findOrFail($cabang->id);
        $cabang->alamat= $request->alamat;
        $cabang->foto = $request->foto;
        if ($request->hasFile('foto')){
            $file=$request->file('foto');
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $destinationPath=public_path().'/assets/hangout/img/';
            $uploadSucces= $file->move($destinationPath,$filename);
            $cabang->foto= $filename;
        }
        $cabang->save();
        return redirect()->route('cabang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cabang  $cabang
     * @return \Illuminate\Http\Response
     */
    public function destroy(cabang $cabang)
    {
        $cabang = cabang::findOrFail($cabang->id);
        $cabang->delete();
        return redirect()->route('cabang.index');
    }
}
