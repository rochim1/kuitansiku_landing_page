<?php

namespace App\Http\Controllers;

use App\Models\katepem;
use App\Models\pembiayaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class PembiayaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pembiayaan.index', [
            'title' => 'Pembiayaan',
            'no' => 1,
            'pembiayaan' => pembiayaan::with('katepem')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pembiayaan.create', [
            'title' => 'Tambah Pembiayaan',
            'katepem' => katepem::all(),
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
            'id_katepem' => 'required',
            'deskripsi_pembiayaan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        pembiayaan::create($validateData);
        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/pembiayaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembiayaan  $pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function show($id_pembiayaan)
    {
        return view('admin.pembiayaan.show', [
            'title' => 'Detail Pembiayaan',
            'pembiayaan' => pembiayaan::with('katepem')->find(Crypt::decryptString($id_pembiayaan)),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembiayaan  $pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pembiayaan)
    {
        return view('admin.pembiayaan.edit', [
            'title' => 'Edit Pembiayaan',
            'pembiayaan' => pembiayaan::with('katepem')->find(Crypt::decryptString($id_pembiayaan)),
            'katepem' => katepem::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembiayaan  $pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pembiayaan)
    {
        $pembiayaan = pembiayaan::find(Crypt::decryptString($id_pembiayaan));
        $validateData = $request->validate([
            'id_katepem' => 'required',
            'deskripsi_pembiayaan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        pembiayaan::find($pembiayaan->id_pembiayaan)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/pembiayaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembiayaan  $pembiayaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pembiayaan)
    {
        $pembiayaan = pembiayaan::find(Crypt::decryptString($id_pembiayaan));

        pembiayaan::destroy($pembiayaan->id_pembiayaan);
        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/pembiayaan');
    }

        //Image Upload Function
        public function upload(Request $request)
        {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('storage/media-pembiayaan'), $fileName);
    
                $url = asset('storage/media-pembiayaan/' . $fileName);
                return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
            }
        }
}
