<?php

namespace App\Http\Controllers;

use App\Models\persyaratan_pembiayaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class PersyaratanPembiayaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.persyaratan_pembiayaan.index', [
            'title' => 'Persyaratan Pembiayaan',
            'no' => 1,
            'persyaratan_pembiayaan' => persyaratan_pembiayaan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.persyaratan_pembiayaan.create', [
            'title' => 'Tambah Persyaratan Pembiayaan'
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
            'deskripsi_persyaratan_pembiayaan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        persyaratan_pembiayaan::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/persyaratan_pembiayaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persyaratan_pembiayaan  $persyaratan_pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function show($id_persyaratan_pembiayaan)
    {
        return view('admin.persyaratan_pembiayaan.show', [
            'title' => 'Detail persyaratan_pembiayaan',
            'persyaratan_pembiayaan' => persyaratan_pembiayaan::find(Crypt::decryptString($id_persyaratan_pembiayaan))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persyaratan_pembiayaan  $persyaratan_pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_persyaratan_pembiayaan)
    {
        return view('admin.persyaratan_pembiayaan.edit', [
            'title' => 'Edit persyaratan_pembiayaan',
            'persyaratan_pembiayaan' => persyaratan_pembiayaan::find(Crypt::decryptString($id_persyaratan_pembiayaan))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persyaratan_pembiayaan  $persyaratan_pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_persyaratan_pembiayaan)
    {
        $persyaratan_pembiayaan = persyaratan_pembiayaan::find(Crypt::decryptString($id_persyaratan_pembiayaan));

        $validateData = $request->validate([
            'deskripsi_persyaratan_pembiayaan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        persyaratan_pembiayaan::find($persyaratan_pembiayaan->id_persyaratan_pembiayaan)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/persyaratan_pembiayaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persyaratan_pembiayaan  $persyaratan_pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_persyaratan_pembiayaan)
    {
        $persyaratan_pembiayaan = persyaratan_pembiayaan::find(Crypt::decryptString($id_persyaratan_pembiayaan));

        persyaratan_pembiayaan::destroy($persyaratan_pembiayaan->id_persyaratan_pembiayaan);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/persyaratan_pembiayaan');
    }
}
