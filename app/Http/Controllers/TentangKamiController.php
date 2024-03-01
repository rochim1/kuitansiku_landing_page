<?php

namespace App\Http\Controllers;

use App\Models\tentang_kami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tentang_kami', [
            'title' => 'Tentang Kami',
            'no' => 1,
            'tentang_kami' => tentang_kami::first()
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
            'gambar_tentang_kami' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'deskripsi_tentang_kami' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        if ($request->file('gambar_tentang_kami')) {
            if ($request->gambar_tentang_kami) {
                $validateData['gambar_tentang_kami'] = Storage::put('media-tentang_kami', $request->file('gambar_tentang_kami'));
            }
        }

        tentang_kami::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/tentang_kami');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tentang_kami  $tentang_kami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tentang_kami)
    {
        $tentang_kami = tentang_kami::find(Crypt::decryptString($id_tentang_kami));
        
        $validateData = $request->validate([
            'gambar_tentang_kami' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'deskripsi_tentang_kami' => '',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!'
        ]);

        if ($request->file('gambar_tentang_kami')) {
            if ($request->gambar_tentang_kami) {
                if (Storage::exists($tentang_kami->gambar_tentang_kami)) {
                    Storage::delete($tentang_kami->gambar_tentang_kami);
                }

                $validateData['gambar_tentang_kami'] = Storage::put('media-tentang_kami', $request->file('gambar_tentang_kami'));
            }
        }

        tentang_kami::find($tentang_kami->id_tentang_kami)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/tentang_kami');
    }
}
