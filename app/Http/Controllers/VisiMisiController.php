<?php

namespace App\Http\Controllers;

// use App\Models\visi_misi;
use App\Models\visi;
use App\Models\misi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.visi_misi', [
            'title' => 'Visi Misi',
            'no' => 1,
            'visi' => visi::first(),
            'misi' => misi::first(),
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
        if($request->tanda == 'visi') {
            $validateData = $request->validate([
                'visi' => 'required',
            ], [
                'required' =>  ':attribute tidak boleh kosong!',
            ]);
    
            visi::create($validateData);
        }

        if($request->tanda == 'misi') {
            $validateData = $request->validate([
                'misi' => 'required',
            ], [
                'required' =>  ':attribute tidak boleh kosong!',
            ]);
    
            misi::create($validateData);
        }

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/visi_misi');
    }

    /**
     * Update the specified resource in storage.
    *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\visi_misi  $visi_misi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_visi_misi)
    {
        $str_arr = preg_split("/\+/", Crypt::decryptString($id_visi_misi));
        $visi = [];
        $misi = [];
        if ($str_arr[0] == 'visi') {
            $visi = visi::find($str_arr[1]);
        } else {
            $misi = misi::find($str_arr[1]);
        }

        if($request->tanda == 'visi') {
            visi::find($visi->id_visi)->update([
                'visi' => $request->visi,
            ]);
        }

        if($request->tanda == 'misi') {

            misi::find($misi->id_misi)->update([
                'misi' => $request->misi,
            ]);
        }

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/visi_misi');
    }
    
}
