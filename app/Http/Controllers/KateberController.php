<?php

namespace App\Http\Controllers;

use App\Models\kateber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KateberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kateber.index', [
            'title' => 'Kategori Berita',
            'no' => 1,
            'kateber' => kateber::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kateber.create', [
            'title' => 'Tambah Kategori Berita'
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
            'nama_kateber' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        kateber::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/kateber');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kateber  $kateber
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kateber)
    {
        return view('admin.kateber.edit', [
            'title' => 'Edit Kategori Berita',
            'kateber' => kateber::find(Crypt::decryptString($id_kateber))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kateber  $kateber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kateber)
    {
        $kateber = kateber::find(Crypt::decryptString($id_kateber));

        $validateData = $request->validate([
            'nama_kateber' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        kateber::find($kateber->id_kateber)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/kateber');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kateber  $kateber
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kateber)
    {
        $kateber = kateber::find(Crypt::decryptString($id_kateber));

        kateber::destroy($kateber->id_kateber);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/kateber');
    }
}
