<?php

namespace App\Http\Controllers;

use App\Models\persyaratan_menabung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class PersyaratanMenabungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.persyaratan_menabung.index', [
            'title' => 'Persyaratan Menabung',
            'no' => 1,
            'persyaratan_menabung' => persyaratan_menabung::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.persyaratan_menabung.create', [
            'title' => 'Tambah Persyaratan Menabung'
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
            'deskripsi_persyaratan_menabung' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        persyaratan_menabung::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/persyaratan_menabung');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\persyaratan_menabung  $persyaratan_menabung
     * @return \Illuminate\Http\Response
     */
    public function show($id_persyaratan_menabung)
    {
        return view('admin.persyaratan_menabung.show', [
            'title' => 'Detail Persyaratan Menabung',
            'persyaratan_menabung' => persyaratan_menabung::find(Crypt::decryptString($id_persyaratan_menabung))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\persyaratan_menabung  $persyaratan_menabung
     * @return \Illuminate\Http\Response
     */
    public function edit($id_persyaratan_menabung)
    {
        return view('admin.persyaratan_menabung.edit', [
            'title' => 'Edit Persyaratan Menabung',
            'persyaratan_menabung' => persyaratan_menabung::find(Crypt::decryptString($id_persyaratan_menabung))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\persyaratan_menabung  $persyaratan_menabung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_persyaratan_menabung)
    {
        $persyaratan_menabung = persyaratan_menabung::find(Crypt::decryptString($id_persyaratan_menabung));

        $validateData = $request->validate([
            'deskripsi_persyaratan_menabung' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        persyaratan_menabung::find($persyaratan_menabung->id_persyaratan_menabung)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/persyaratan_menabung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\persyaratan_menabung  $persyaratan_menabung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_persyaratan_menabung)
    {
        $persyaratan_menabung = persyaratan_menabung::find(Crypt::decryptString($id_persyaratan_menabung));

        persyaratan_menabung::destroy($persyaratan_menabung->id_persyaratan_menabung);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/persyaratan_menabung');
    }
}
