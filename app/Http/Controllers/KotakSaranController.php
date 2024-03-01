<?php

namespace App\Http\Controllers;

use App\Models\kotak_saran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class KotakSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kotak_saran.index', [
            'title' => 'Kotak Saran',
            'no' => 1,
            'kotak_saran' => kotak_saran::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kotak_saran  $kotak_saran
     * @return \Illuminate\Http\Response
     */
    public function show($id_kotak_saran)
    {
        $kotak_saran = kotak_saran::find(Crypt::decryptString($id_kotak_saran));
        
        if(!$kotak_saran->open) {
            kotak_saran::find($kotak_saran->id_kotak_saran)->update([
                'open' => true,
            ]);
        } 

        return view('admin.kotak_saran.show', [
            'title' => 'Detail Saran',
            'subject' => 'Tanggapan BMT-At BMT At Taawun',
            'message' => 'Kami menyambut baik terhadap kritik, saran atau masukan dari anda, adapun itu diharapkan kedepannya menjadi lebih baik lagi',
            'kotak_saran' => kotak_saran::find($kotak_saran->id_kotak_saran)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kotak_saran  $kotak_saran
     * @return \Illuminate\Http\Response
     */
    public function edit(kotak_saran $kotak_saran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kotak_saran  $kotak_saran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kotak_saran $kotak_saran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kotak_saran  $kotak_saran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kotak_saran)
    {
        $kotak_saran = kotak_saran::find(Crypt::decryptString($id_kotak_saran));

        kotak_saran::destroy($kotak_saran->id_kotak_saran);

        return redirect('/admin/kotak_saran')->with([
            'name' => 'notification',
            'title' => 'Data berhasil dihapus!',
            'icon' => 'success',
            'time' => '2100'
        ]);
    }
}
