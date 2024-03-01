<?php

namespace App\Http\Controllers;

use App\Models\maps;
use App\Models\penyediaSosmed;
use App\Models\sosmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sosmed.index', [
            'title' => 'Sosial Media',
            'no' => 1,
            'sosmed' => sosmed::JoinPenyediaSosmed()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyedia_sosmed = penyediaSosmed::all();

        return view('admin.sosmed.create', [
            'title' => 'Tambah Sosial Media',
            'penyedia_sosmed' => $penyedia_sosmed
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
            'penyedia_sosmed' => 'required',
            'alamat_sosmed' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        sosmed::create([
            'id_penyedia_sosmed' => $request->penyedia_sosmed,
            'alamat_sosmed' => $request->alamat_sosmed
        ]);

        Alert::success('kerja bagus', 'Data berhasil ditambah');
        return redirect('/admin/sosmed');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function edit($id_sosmed)
    {
        $penyedia_sosmed = penyediaSosmed::all();
        return view('admin.sosmed.edit', [
            'title' => 'Edit Sosial Media',
            'sosmed' => sosmed::JoinPenyediaSosmed()->find(Crypt::decryptString($id_sosmed)),
            'penyedia_sosmed' => $penyedia_sosmed
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_sosmed)
    {
        $sosmed = sosmed::find(Crypt::decryptString($id_sosmed));

        $validateData = $request->validate([
            'penyedia_sosmed' => 'required',
            'alamat_sosmed' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        sosmed::find($sosmed->id_sosmed)->update([
            'id_penyedia_sosmed' => $request->penyedia_sosmed,
            'alamat_sosmed' => $request->alamat_sosmed
        ]);

        Alert::success('kerja bagus', 'Data berhasil diedit!');
        return redirect('/admin/sosmed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_sosmed)
    {
        $sosmed = sosmed::find(Crypt::decryptString($id_sosmed));

        sosmed::destroy($sosmed->id_sosmed);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/sosmed');
    }
}
