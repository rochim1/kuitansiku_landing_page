<?php

namespace App\Http\Controllers;

use App\Models\zis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;
class ZisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.zis', [
            'title' => 'ZIS (Zakat, Infak, Shodaqoh)',
            'no' => 1,
            'zis' => zis::first()
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
            'deskripsi_zis' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        zis::create($validateData);
        
        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/zis');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\zis  $zis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_zis)
    {
        $zis = zis::find(Crypt::decryptString($id_zis));

        $validateData = $request->validate([
            'deskripsi_zis' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        zis::find($zis->id_zis)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/zis');
    }

        //Image Upload Function
        public function upload(Request $request)
        {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('storage/media-zis'), $fileName);
    
                $url = asset('storage/media-zis/' . $fileName);
                return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
            }
        }
}
