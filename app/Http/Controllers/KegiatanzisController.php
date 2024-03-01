<?php

namespace App\Http\Controllers;

use App\Models\kegiatanzis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KegiatanzisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kegiatanzis.index', [
            'title' => 'Kegiatan Zis',
            'no' => 1,
            'kegiatanzis' => kegiatanzis::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatanzis.create', [
            'title' => 'Tambah Kegiatan Zis'
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
            'gambar_kegiatanzis' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!'
        ]);

        if ($request->file('gambar_kegiatanzis')) {
            if ($request->gambar_kegiatanzis) {
                $validateData['gambar_kegiatanzis'] = Storage::put('media-kegiatanzis', $request->file('gambar_kegiatanzis'));
            }
        }

        kegiatanzis::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/kegiatan_zis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiatanzis  $kegiatanzis
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatanzis $kegiatanzis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiatanzis  $kegiatanzis
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatanzis $kegiatanzis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kegiatanzis  $kegiatanzis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kegiatanzis $kegiatanzis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiatanzis  $kegiatanzis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kegiatanzis)
    {
        $kegiatanzis = kegiatanzis::find(Crypt::decryptString($id_kegiatanzis));

        if ($kegiatanzis->gambar_kegiatanzis) {
            if (Storage::exists($kegiatanzis->gambar_kegiatanzis)) {
                Storage::delete($kegiatanzis->gambar_kegiatanzis);
            }
        }

        kegiatanzis::destroy($kegiatanzis->id_kegiatanzis);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/kegiatan_zis');
    }
}
