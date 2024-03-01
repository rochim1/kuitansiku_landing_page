<?php

namespace App\Http\Controllers;

use App\Models\linkPendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class LinkPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.link_pendaftaran.index', [
            'title' => 'Link Pendaftaran',
            'linkPendaftaran' => linkPendaftaran::get()
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\linkPendaftaran  $linkPendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_link_pendaftaran)
    {
        $validateData = $request->validate(
            [
                'link' => 'required',
            ],
        );

        linkPendaftaran::find(Crypt::decryptString($id_link_pendaftaran))->update($validateData);
        
        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/linkPendaftaran');
    }
}
