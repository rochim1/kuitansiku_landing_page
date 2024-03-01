<?php

namespace App\Http\Controllers;

use App\Models\katesim;
use App\Models\simpanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;
class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.simpanan.index', [
            'title' => 'Simpanan',
            'no' => 1,
            'simpanan' => simpanan::JoinKateSim()->get(),
            'katesim' => katesim::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.simpanan.create', [
            'title' => 'Tambah Simpanan',
            'katesim' => katesim::all(),
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
            'id_katesim' => 'required',
            'deskripsi_simpanan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        Simpanan::create($validateData);
        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/simpanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function show($id_simpanan)
    {
        return view('admin.simpanan.show', [
            'title' => 'Detail Simpanan',
            'simpanan' => simpanan::with('katesim')->find(Crypt::decryptString($id_simpanan)),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_simpanan)
    {
        return view('admin.simpanan.edit', [
            'title' => 'Edit Simpanan',
            'simpanan' => simpanan::with('katesim')->find(Crypt::decryptString($id_simpanan)),
            'katesim' => katesim::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_simpanan)
    {
        $simpanan = simpanan::find(Crypt::decryptString($id_simpanan));
        $validateData = $request->validate([
            'id_katesim' => 'required',
            'deskripsi_simpanan' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        simpanan::find($simpanan->id_simpanan)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/simpanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_simpanan)
    {
        $simpanan = Simpanan::find(Crypt::decryptString($id_simpanan));

        Simpanan::destroy($simpanan->id_simpanan);
        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/simpanan');
    }

        //Image Upload Function
        public function upload(Request $request)
        {
            if ($request->hasFile('upload')) {
                $originName = $request->file('upload')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $request->file('upload')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $request->file('upload')->move(public_path('storage/media-simpanan'), $fileName);
    
                $url = asset('storage/media-simpanan/' . $fileName);
                return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
            }
        }
}
