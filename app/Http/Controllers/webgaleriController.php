<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class webgaleriController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$galeri = DB::table('galeri')->get();
 
    	// mengirim data ke view
    	return view('Vwebgaleri',['galeri' => $galeri]);
 
    }
}
