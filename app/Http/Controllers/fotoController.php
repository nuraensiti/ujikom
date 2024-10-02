<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    public function index()
    {
        // Menampilkan data foto dengan pagination
        $foto = Foto::paginate(10);
        return view('VFoto', compact('foto'));
    }

    public function tambah(Request $request)
    {
        // Menambah data baru
        Foto::create([
            'galery_id' => $request->galery_id,
            'file' => $request->file,
            'judul' => $request->judul
        ]);

        return redirect('/foto');
    }

    public function edit(Request $request)
{
    // Ambil ID dari request
    $id = $request->id;

    // Mengupdate data yang ada
    $foto = Foto::find($id);
    $foto->update([
        'galery_id' => $request->galeri_id, // Mengubah ke galery_id
        'file' => $request->file,           // Mengubah ke file
        'judul' => $request->judul          // Mengubah ke judul
    ]);

    return redirect('/foto');
}
	

	public function hapus(Request $request)
	{
		$foto = Foto::findOrFail($request->id); // Cari foto berdasarkan ID
		$foto->delete(); // Hapus foto dari database
	
		return redirect()->route('foto.index')->with('success', 'Foto berhasil dihapus');
	}
	
    }

