<?php

namespace App\Http\Controllers;

use App\Models\deskontak;
use App\Models\kontak;
use App\Models\linkWA;
use App\Models\maps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kontak.index', [
            'title' => 'Kontak',
            'kontak' => kontak::all(),
            'deskontak' => deskontak::first(),
            'linkWA' => linkWA::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontak.create', [
            'title' => 'Tambah Kontak'
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
        $validateData = $request->validate(
            [
                'no_kontak' => 'required'
            ],
            [
                'required' =>  ':attribute tidak boleh kosong!',
            ]
        );
        
        $store = kontak::create([
            'no_kontak' => $request->no_kontak,
            'whatsapp' => $request->whatsapp? 1 : 0,
            'deskripsi' => $request->deskripsi
        ]);

        $store ? Alert::success('kerja bagus', 'Data berhasil disimpan!') : '';
        return redirect('/admin/kontak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kontak)
    {
        return view('admin.kontak.edit', [
            'title' => 'Edit kontak',
            'kontak' => kontak::find(Crypt::decryptString($id_kontak))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kontak)
    {
        $validateData = $request->validate(
            [
                'no_kontak' => 'required'
            ],
            [
                'required' =>  ':attribute tidak boleh kosong!',
            ]
        );

        $store = kontak::find(Crypt::decryptString($id_kontak))->update([
            'no_kontak' => $request->no_kontak,
            'whatsapp' => $request->whatsapp ? 1 : 0,
            'deskripsi' => $request->deskripsi
        ]);

        $store ? Alert::success('kerja bagus', 'Data berhasil diperbarui!') : '';
        return redirect('/admin/kontak');
    }
    
    public function updateLinkWA(Request $request)
    {
        $validateData = $request->validate(
            [
                'link_WA' => 'required'
            ],
        );

        $linkWA = linkWA::first();
        if ($linkWA) {
            linkWA::find($linkWA->id_link_WA)->update($validateData);
        } else {
            linkWA::create($validateData);
        }

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/kontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kontak)
    {
        $kontak = kontak::find(Crypt::decryptString($id_kontak));

        kontak::destroy($kontak->id_kontak);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/kontak');
    }

    public function updateKeteranganLinkKontak(Request $request)
    {
        $desKontak = deskontak::first();
        
        if ($desKontak) {
            //update
            deskontak::where('id_deskontak', '=',$desKontak->id_deskontak)->update([
                "link_deskontak" => $request->link_deskontak
            ]);
        } else {
            //create
            deskontak::create(["link_deskontak" => $request->link_deskontak]);
        }
    
        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/kontak');
    }
}
