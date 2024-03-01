<?php

namespace App\Http\Controllers;

use App\Models\sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sejarah', [
            'title' => 'Sejarah',
            'no' => 1,
            'sejarah' => sejarah::first(),
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
            'deskripsi_sejarah' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        sejarah::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/sejarah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_sejarah)
    {
        $sejarah = sejarah::find(Crypt::decryptString($id_sejarah));

        $validateData = $request->validate([
            'deskripsi_sejarah' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        sejarah::find($sejarah->id_sejarah)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/sejarah');
    }

        //Image Upload Function
        public function upload(Request $request)
        {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('storage/media-sejarah'), $fileName);
    
                $url = asset('storage/media-sejarah/' . $fileName);
                return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
            }
        }
}
