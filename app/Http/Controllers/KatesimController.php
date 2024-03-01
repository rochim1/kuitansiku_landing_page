<?php

namespace App\Http\Controllers;

use App\Models\katesim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KatesimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.katesim.index', [
            'title' => 'Kategori Simpanan',
            'no' => 1,
            'katesim' => katesim::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.katesim.create', [
            'title' => 'Tambah Kategori Simpanan'
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
            'nama_katesim' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        katesim::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/katesim');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\katesim  $katesim
     * @return \Illuminate\Http\Response
     */
    public function edit($id_katesim)
    {
        return view('admin.katesim.edit', [
            'title' => 'Edit Kategori Simpanan',
            'katesim' => katesim::find(Crypt::decryptString($id_katesim))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\katesim  $katesim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_katesim)
    {
        $katesim = katesim::find(Crypt::decryptString($id_katesim));

        $validateData = $request->validate([
            'nama_katesim' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        katesim::find($katesim->id_katesim)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/katesim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\katesim  $katesim
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_katesim)
    {
        $katesim = katesim::find(Crypt::decryptString($id_katesim));

        katesim::destroy($katesim->id_katesim);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/katesim');
    }
}
