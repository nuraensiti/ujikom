<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class webfotoController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	$foto = DB::table('foto')->get();
 
    	// mengirim data ke view
    	return view('Vwebfoto',['foto' => $foto]);
 
    }
}
