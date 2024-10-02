<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
	public function index()
    {
        // Menampilkan data galeri dengan pagination
        $galeri = Galeri::paginate(10);
        return view('VGaleri', compact('galeri'));
    }

    public function tambah(Request $request)
    {
        // Menambah data baru
        Galeri::create([
            'post_id' => $request->post_id,
            'position' => $request->position,
            'status' => $request->status
        ]);

        return redirect('/galeri');
    }

    public function edit(Request $request)
{
    // Ambil ID dari request
    $id = $request->id;

    // Mengupdate data yang ada
    $galeri = Galeri::find($id);
    $galeri->update([
        'post_id' => $request->post_id, // Mengubah ke galery_id
        'position' => $request->position,           // Mengubah ke file
        'status' => $request->status         // Mengubah ke judul
    ]);

    return redirect('/galeri');
}
	

	public function hapus(Request $request)
	{
		$galeri = Galeri::findOrFail($request->id); 
		$galeri->delete();
	
		return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus');
	}
	
    }