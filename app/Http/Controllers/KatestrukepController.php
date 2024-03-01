<?php

namespace App\Http\Controllers;

use App\Models\katestrukep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KatestrukepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.katestrukep.index', [
            'title' => 'Kategori Struktur Kepengurusan',
            'no' => 'A',
            'katestrukep' => katestrukep::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.katestrukep.create', [
            'title' => 'Tambah Kategori Struktur Kepengurusan'
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
            'nama_katestrukep' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        katestrukep::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/katestrukep');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\katestrukep  $katestrukep
     * @return \Illuminate\Http\Response
     */
    public function edit($id_katestrukep)
    {
        return view('admin.katestrukep.edit', [
            'title' => 'Edit Kategori Struktur Kepengurusan',
            'katestrukep' => katestrukep::find(Crypt::decryptString($id_katestrukep))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\katestrukep  $katestrukep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_katestrukep)
    {
        $katestrukep = katestrukep::find(Crypt::decryptString($id_katestrukep));

        $validateData = $request->validate([
            'nama_katestrukep' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        katestrukep::find($katestrukep->id_katestrukep)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/katestrukep');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\katestrukep  $katestrukep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_katestrukep)
    {
        $katestrukep = katestrukep::find(Crypt::decryptString($id_katestrukep));

        katestrukep::destroy($katestrukep->id_katestrukep);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/katestrukep');
    }
}
