<?php

namespace App\Http\Controllers;

use App\Models\deskripsi_kalkupem;
use App\Models\kalkupem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class KalkupemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kalkupem.index', [
            'title' => 'Kalkulator Pembiayaan',
            'no' => 1,
            'kalkupem' => kalkupem::all(),
            'deskripsi' => deskripsi_kalkupem::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kalkupem.create', [
            'title' => 'Tambah Kalkulator Pembiayaan'
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
            'bulan' => 'required',
            'bunga' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        kalkupem::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/kalkupem');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kalkupem  $kalkupem
     * @return \Illuminate\Http\Response
     */
    public function show(kalkupem $kalkupem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kalkupem  $kalkupem
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kalkupem)
    {
        return view('admin.kalkupem.edit', [
            'title' => 'Edit Kalkulator Pembiayaan',
            'kalkupem' => kalkupem::find(Crypt::decryptString($id_kalkupem))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kalkupem  $kalkupem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kalkupem)
    {
        $kalkupem = kalkupem::find(Crypt::decryptString($id_kalkupem));

        $validateData = $request->validate([
            'bulan' => 'required',
            'bunga' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        kalkupem::find($kalkupem->id_kalkupem)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/kalkupem');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kalkupem  $kalkupem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kalkupem)
    {
        $kalkupem = kalkupem::find(Crypt::decryptString($id_kalkupem));

        kalkupem::destroy($kalkupem->id_kalkupem);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/kalkupem');
    }

    public function deskripsiCreate(Request $request)
    {
        $validateData = $request->validate(
            [
                'deskripsi_kalkupem' => 'required',
            ],
            [
                'required' =>  ':attribute tidak boleh kosong!',
            ]
        );

        $deskripsi = deskripsi_kalkupem::first();
        $message = '';
        if ($deskripsi) {
            deskripsi_kalkupem::find($deskripsi->id_deskripsi_kalkupem)->update($validateData);
            $message = 'berhasil perbarui deskripsi';
        } else {
            deskripsi_kalkupem::create($validateData);
            $message = 'berhasil simpan deskripsi';
        }

        Alert::success('kerja bagus', $message);
        return redirect('/admin/kalkupem');
    }
}
