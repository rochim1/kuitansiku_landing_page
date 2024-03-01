<?php

namespace App\Http\Controllers;

use App\Models\katestrukep;
use App\Models\strukep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class StrukepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStrukep($id_katestrukep)
    {
        return view('admin.strukep.index', [
            'title' => 'Struktur Kepengurusan',
            'no' => 1,
            'strukep' => strukep::where('id_katestrukep', Crypt::decryptString($id_katestrukep))->get(),
            'katestrukep' => katestrukep::find(Crypt::decryptString($id_katestrukep))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStrukep($id_katestrukep)
    {
        return view('admin.strukep.create', [
            'title' => 'Tambah Anggota Struktur Kepengurusan',
            'katestrukep' => katestrukep::find(Crypt::decryptString($id_katestrukep)),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeStrukep(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required'
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        $validateData['id_katestrukep'] = Crypt::decryptString($request->id_katestrukep);
        strukep::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/katestrukep/strukep/'. $request->id_katestrukep);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\strukep  $strukep
     * @return \Illuminate\Http\Response
     */
    public function editstrukep($id_strukep)
    {
        return view('admin.strukep.edit', [
            'title' => 'Edit Struktur Kepengurusan',
            'strukep' => strukep::with('katestrukep')->find(Crypt::decryptString($id_strukep)),
            'katestrukep' => katestrukep::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\strukep  $strukep
     * @return \Illuminate\Http\Response
     */
    public function updateStrukep(Request $request, $id_strukep)
    {
        $strukep = strukep::find(Crypt::decryptString($id_strukep));

        $validateData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        $validateData['id_katestrukep'] = $request->id_katestrukep;
        strukep::find($strukep->id_strukep)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/katestrukep/strukep/'. Crypt::encryptString($request->id_katestrukep));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\strukep  $strukep
     * @return \Illuminate\Http\Response
     */
    public function destroyStrukep($id_strukep)
    {
        $strukep = strukep::find(Crypt::decryptString($id_strukep));

        strukep::destroy($strukep->id_strukep);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/katestrukep/strukep/' . Crypt::encryptString($strukep->id_katestrukep));
    }

}
