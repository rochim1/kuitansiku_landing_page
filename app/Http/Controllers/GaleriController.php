<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('admin.galeri.index', [
            'title' => 'Galeri',
            'no' => 1,
            'galeri' => galeri::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create', [
            'title' => 'Tambah Galeri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'gambar_galeri' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!'
        ]);

        if ($request->file('gambar_galeri')) {
            if ($request->gambar_galeri) {
                $validateData['gambar_galeri'] = Storage::put('media-galeri', $request->file('gambar_galeri'));
            }
        }

        galeri::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_galeri)
    {
        $galeri = galeri::find(Crypt::decryptString($id_galeri));

        if ($galeri->gambar_galeri) {
            if (Storage::exists($galeri->gambar_galeri)) {
                Storage::delete($galeri->gambar_galeri);
            }
        }

        galeri::destroy($galeri->id_galeri);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/galeri');
    }
}
