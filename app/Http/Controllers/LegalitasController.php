<?php

namespace App\Http\Controllers;

use App\Models\legalitas;
use App\Models\namaLegalitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class LegalitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.legalitas.index', [
            'title' => 'Legalitas',
            'no' => 1,
            'legalitas' => legalitas::JoinNamaLegalitas()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.legalitas.create', [
            'title' => 'Tambah Legalitas',
            'judul_legalitas' => namaLegalitas::all(),
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
            'judul_legalitas' => 'required|unique:legalitas,id_nama_legalitas',
            'deskripsi_legalitas' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        legalitas::create([
            'id_nama_legalitas' => $request->judul_legalitas ,
            'deskripsi_legalitas' => $request->deskripsi_legalitas ,
        ]);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/legalitas');
    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\legalitas  $legalitas
     * @return \Illuminate\Http\Response
     */
    public function show($id_legalitas)
    {
        return view('admin.legalitas.show', [
            'title' => 'Detail Legalitas',
            'legalitas' => legalitas::JoinNamaLegalitas()->find(Crypt::decryptString($id_legalitas))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\legalitas  $legalitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id_legalitas)
    {
        $judul_legalitas = namaLegalitas::all();
        return view('admin.legalitas.edit', [
            'title' => 'Edit Legalitas',
            'legalitas' => legalitas::JoinNamaLegalitas()->find(Crypt::decryptString($id_legalitas)),
            'judul_legalitas' => $judul_legalitas,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\legalitas  $legalitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_legalitas)
    {
        $legalitas = legalitas::find(Crypt::decryptString($id_legalitas));

        $validateData = $request->validate([
            'judul_legalitas' => 'required|unique:legalitas,id_nama_legalitas,'.$legalitas->id_legalitas.',id_legalitas',
            'deskripsi_legalitas' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        legalitas::find($legalitas->id_legalitas)->update([
            'id_nama_legalitas' => $request->judul_legalitas,
            'deskripsi_legalitas' => $request->deskripsi_legalitas,
        ]);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/legalitas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\legalitas  $legalitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_legalitas)
    {
        $legalitas = legalitas::find(Crypt::decryptString($id_legalitas));

        legalitas::destroy($legalitas->id_legalitas);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/legalitas');
    }
}
