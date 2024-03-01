<?php

namespace App\Http\Controllers;

use App\Models\keunggulan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class KeunggulanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.keunggulan.index', [
            'title' => 'Keunggulan',
            'no' => 1,
            'keunggulan' => keunggulan::all()
        ]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.keunggulan.create', [
            'title' => 'Tambah Keunggulan'
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
            'deskripsi_keunggulan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);
        
        keunggulan::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/keunggulan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\keunggulan  $keunggulan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_keunggulan)
    {
        return view('admin.keunggulan.edit', [
            'title' => 'Edit keunggulan',
            'keunggulan' => keunggulan::find(Crypt::decryptString($id_keunggulan))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\keunggulan  $keunggulan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_keunggulan)
    {
        $keunggulan = keunggulan::find(Crypt::decryptString($id_keunggulan));

        $validateData = $request->validate([
            'deskripsi_keunggulan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        keunggulan::find($keunggulan->id_keunggulan)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/keunggulan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\keunggulan  $keunggulan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_keunggulan)
    {
        $keunggulan = keunggulan::find(Crypt::decryptString($id_keunggulan));

        keunggulan::destroy($keunggulan->id_keunggulan);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/keunggulan');
    }
}
