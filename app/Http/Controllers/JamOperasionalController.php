<?php

namespace App\Http\Controllers;

use App\Models\jam_operasional;
use App\Models\ketOperasional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class JamOperasionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jam_operasional.index', [
            'title' => 'Jam Operasional',
            'no' => 1,
            'jam_operasional' => jam_operasional::all(),
            'keteranganOperasional' => ketOperasional::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jam_operasional.create', [
            'title' => 'Tambah Jam Operasional'
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
            'hari' => 'required|unique:jam_operasional,hari',
            'status' => 'required',
            'jam_mulai' => '',
            'jam_selesai' => '',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'unique' =>  'jadwal :attribute '.$request->hari.' sudah ada!',
        ]);

        jam_operasional::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/jam_operasional');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jam_operasional  $jam_operasional
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jam_operasional)
    {
        return view('admin.jam_operasional.edit', [
            'title' => 'Edit Jam Operasional',
            'jam_operasional' => jam_operasional::find(Crypt::decryptString($id_jam_operasional))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jam_operasional  $jam_operasional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jam_operasional)
    {
        $jam_operasional = jam_operasional::find(Crypt::decryptString($id_jam_operasional));

        $validateData = $request->validate([
            'hari' => 'required',
            'status' => 'required',
            'jam_mulai' => '',
            'jam_selesai' => '',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        jam_operasional::find($jam_operasional->id_jam_operasional)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/jam_operasional');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jam_operasional  $jam_operasional
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jam_operasional)
    {
        $jam_operasional = jam_operasional::find(Crypt::decryptString($id_jam_operasional));

        jam_operasional::destroy($jam_operasional->id_jam_operasional);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/jam_operasional');
    }

    public function updateKeteranganOperasional(Request $request)
    {
        $keteranganOperasional = ketOperasional::first();

        if ($keteranganOperasional) {
            //update
            ketOperasional::where("id_ket_operasional", $keteranganOperasional->id_ket_operasional)->update([
                "keterangan_operasional" => $request->keterangan_operasional
            ]);
        } else {
            //create
            ketOperasional::create(["keterangan_operasional" => $request->keterangan_operasional]);
        }
    
        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/jam_operasional');
    }
}
