<?php

namespace App\Http\Controllers;

use App\Models\deposito_syariah;
use App\Models\deskripsi_depsyar;
use App\Models\katedeposito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class DepositoSyariahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.deposito_syariah.index', [
            'title' => 'Deposito Syariah',
            'no' => 1,
            'deposito_syariah' => deposito_syariah::with('katedeposito')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id_depsyar)
    {
        return view('admin.deposito_syariah.show', [
            'title' => 'Detail Deposito Syariah',
            'deposito_syariah' => deposito_syariah::with('katedeposito')->find(Crypt::decryptString($id_depsyar)),
        ]);
    }

    public function create()
    {
        return view('admin.deposito_syariah.create', [
            'title' => 'Tambah Simpanan',
            'katedeposito' => katedeposito::all(),
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
            'id_katedeposito' => 'required|unique:deposito_syariah,id_katedeposito',
            'deskripsi_depsyar' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'required' =>  ':attribute sudah digunakan!',
        ]);

        deposito_syariah::create($validateData);
        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/deposito_syariah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deposito_syariah  $deposito_syariah
     * @return \Illuminate\Http\Response
     */
    public function edit($id_depsyar)
    {
        return view('admin.deposito_syariah.edit', [
            'title' => 'edit deposito syariah',
            'deposito_syariah' => deposito_syariah::with('katedeposito')->find(Crypt::decryptString($id_depsyar)),
            'katedeposito' => katedeposito::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\deposito_syariah  $deposito_syariah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_depsyar)
    {
        $deposito_syariah = deposito_syariah::find(Crypt::decryptString($id_depsyar));
        $validateData = $request->validate([
            'id_katedeposito' => 'required|unique:deposito_syariah,id_katedeposito,'.Crypt::decryptString($id_depsyar).',id_depsyar',
            'deskripsi_depsyar' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        deposito_syariah::find($deposito_syariah->id_depsyar)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/deposito_syariah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deposito_syariah  $deposito_syariah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_depsyar)
    {
        $deposito_syariah = deposito_syariah::find(Crypt::decryptString($id_depsyar));

        deposito_syariah::destroy($deposito_syariah->id_depsyar);
        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/deposito_syariah');
    }
    
    public function deskripsiCreate(Request $request)
    {
        $validateData = $request->validate(
            [
                'deskripsi_depsyar' => 'required',
            ],
            [
                'required' =>  ':attribute tidak boleh kosong!',
            ]
        );

        $deskripsi = deskripsi_depsyar::first();
        $message = '';
        if ($deskripsi) {
            deskripsi_depsyar::find($deskripsi->id_deskripsi_depsyar)->update($validateData);
            $message = 'berhasil perbarui deskripsi';
        } else {
            deskripsi_depsyar::create($validateData);
            $message = 'berhasil simpan deskripsi';
        }

        Alert::success('kerja bagus', $message);
        return redirect('/admin/deposito_syariah');
    }

    //Image Upload Function
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('storage/media-deposito_syariah'), $fileName);

            $url = asset('storage/media-deposito_syariah/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
