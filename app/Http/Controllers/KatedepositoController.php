<?php

namespace App\Http\Controllers;

use App\Models\katedeposito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KatedepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.katedeposito.index', [
            'title' => 'Kategori Deposito Syariah',
            'no' => 1,
            'katedeposito' => katedeposito::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.katedeposito.create', [
            'title' => 'Tambah Kategori Deposito Syariah'
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
            'nama_katedeposito' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        katedeposito::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/katedeposito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\katedeposito  $katedeposito
     * @return \Illuminate\Http\Response
     */
    public function edit($id_katedeposito)
    {
        return view('admin.katedeposito.edit', [
            'title' => 'Edit Kategori Deposito Syariah',
            'katedeposito' => katedeposito::find(Crypt::decryptString($id_katedeposito))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\katedeposito  $katedeposito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_katedeposito)
    {
        $katedeposito = katedeposito::find(Crypt::decryptString($id_katedeposito));

        $validateData = $request->validate([
            'nama_katedeposito' => 'required|unique:katedeposito,id_katedeposito,'.$request->nama_katedeposito. ',id_katedeposito'
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        katedeposito::find($katedeposito->id_katedeposito)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/katedeposito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\katedeposito  $katedeposito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_katedeposito)
    {
        $katedeposito = katedeposito::find(Crypt::decryptString($id_katedeposito));

        katedeposito::destroy($katedeposito->id_katedeposito);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/katedeposito');
    }
}
