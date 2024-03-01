<?php

namespace App\Http\Controllers;

use App\Models\jumbotron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.jumbotron.index', [
            'title' => 'Jumbotron',
            'no' => 1,
            'jumbotron' => jumbotron::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jumbotron.create', [
            'title' => 'Tambah Jumbotron'
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
            'gambar_jumbotron' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_jumbotron' => 'required',
            'deskripsi_jumbotron' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        if ($request->file('gambar_jumbotron')) {
            if ($request->gambar_jumbotron) {
                $validateData['gambar_jumbotron'] = Storage::put('media-jumbotron', $request->file('gambar_jumbotron'));
            }
        }

        jumbotron::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/jumbotron');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function show($id_jumbotron)
    {
        return view('admin.jumbotron.show', [
            'title' => 'Detail Jumbotron',
            'jumbotron' => jumbotron::find(Crypt::decryptString($id_jumbotron))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function edit($id_jumbotron)
    {
        return view('admin.jumbotron.edit', [
            'title' => 'Edit Jumbotron',
            'jumbotron' => jumbotron::find(Crypt::decryptString($id_jumbotron))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jumbotron)
    {
        $jumbotron = jumbotron::find(Crypt::decryptString($id_jumbotron));

        $validateData = $request->validate([
            'gambar_jumbotron' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_jumbotron' => 'required',
            'deskripsi_jumbotron' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        if ($request->file('gambar_jumbotron')) {
            if ($request->gambar_jumbotron) {
                if (Storage::exists($jumbotron->gambar_jumbotron)) {
                    Storage::delete($jumbotron->gambar_jumbotron);
                }

                $validateData['gambar_jumbotron'] = Storage::put('media-jumbotron', $request->file('gambar_jumbotron'));
            }
        }

        jumbotron::find($jumbotron->id_jumbotron)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/jumbotron');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jumbotron  $jumbotron
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_jumbotron)
    {
        $jumbotron = jumbotron::find(Crypt::decryptString($id_jumbotron));

        if ($jumbotron->gambar_jumbotron) {
            if (Storage::exists($jumbotron->gambar_jumbotron)) {
                Storage::delete($jumbotron->gambar_jumbotron);
            }
        }

        jumbotron::destroy($jumbotron->id_jumbotron);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/jumbotron');
    }
}
