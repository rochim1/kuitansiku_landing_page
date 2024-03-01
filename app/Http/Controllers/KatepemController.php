<?php

namespace App\Http\Controllers;

use App\Models\katepem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KatepemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.katepem.index', [
            'title' => 'Kategori Pembiayaan',
            'no' => 1,
            'katepem' => katepem::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.katepem.create', [
            'title' => 'Tambah Kategori Pembiayaan'
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
            'nama_katepem' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        katepem::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/katepem');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\katepem  $katepem
     * @return \Illuminate\Http\Response
     */
    public function edit($id_katepem)
    {
        return view('admin.katepem.edit', [
            'title' => 'Edit Kategori Pembiayaan',
            'katepem' => katepem::find(Crypt::decryptString($id_katepem))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\katepem  $katepem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_katepem)
    {
        $katepem = katepem::find(Crypt::decryptString($id_katepem));

        $validateData = $request->validate([
            'nama_katepem' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        katepem::find($katepem->id_katepem)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/katepem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\katepem  $katepem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_katepem)
    {
        $katepem = katepem::find(Crypt::decryptString($id_katepem));

        katepem::destroy($katepem->id_katepem);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/katepem');
    }
}
