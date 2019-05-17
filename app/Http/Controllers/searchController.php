<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\makanan;
class searchController extends Controller
{
    public function makanan(Request $request)
    {
    	$search = $request->get('search');
    	$makanan = makanan::where('makanan','like','%'.$search.'%')->get();
    
    return view('makanan.index', compact('makanan'));
    }
}
