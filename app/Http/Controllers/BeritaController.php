<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\kateber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBerita($id_kateber)
    {
        $file_name_ck_editor = Storage::disk('public')->allFiles('/media-berita/ck-editor');
        foreach ($file_name_ck_editor as $nama) {
            !Berita::all()->where('deskripsi_berita', 'like', '%' . $nama . '%') ? Storage::disk('public')->delete($nama) : '';
        }

        return view('admin.berita.index', [
            'title' => 'Berita',
            'no' => 1,
            'berita' => berita::where('id_kateber', Crypt::decryptString($id_kateber))->orderBy('created_at', 'DESC')->get(),
            'kateber' => kateber::find(Crypt::decryptString($id_kateber))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBerita($id_kateber)
    {
        return view('admin.berita.create', [
            'title' => 'Tambah Berita',
            'kateber' => kateber::find(Crypt::decryptString($id_kateber)),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBerita(Request $request)
    {
        $validateData = $request->validate([
            'gambar_berita' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_berita' => 'required',
            'deskripsi_berita' => 'required',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!'
        ]);

        if ($request->file('gambar_berita')) {
            if ($request->gambar_berita) {
                $validateData['gambar_berita'] = Storage::put('media-berita', $request->file('gambar_berita'));
            }
        }

        $validateData['id_kateber'] = Crypt::decryptString($request->id_kateber);
        $validateData['dibuat'] = auth()->user()->id;
        $validateData['dilihat'] = 0;
        $validateData['unggulan'] = $request->unggulan ? now() : null;

        berita::create($validateData);
        
        Alert::success('kerja bagus', 'Data berhasil ditambah!');
        return redirect('/admin/kateber/berita/'. $request->id_kateber);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function showBerita(Request $request)
    {
        return view('admin.berita.show', [
            'title' => 'Detail Berita',
            'no' => 1,
            'berita' => berita::with('kateber', 'user')->find(Crypt::decryptString($request->id_berita))
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function editBerita($id_berita)
    {
        return view('admin.berita.edit', [
            'title' => 'Edit berita',
            'berita' => berita::with('kateber')->find(Crypt::decryptString($id_berita)),
            'kateber' => kateber::orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function updateBerita(Request $request, $id_berita)
    {
        $berita = berita::find(Crypt::decryptString($id_berita));

        $validateData = $request->validate([
            'gambar_berita' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_berita' => 'required',
            'deskripsi_berita' => 'required',
        ], [
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!',
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        if ($request->file('gambar_berita')) {
            if ($request->gambar_berita) {
                if (Storage::exists($berita->gambar_berita)) {
                    Storage::delete($berita->gambar_berita);
                }

                $validateData['gambar_berita'] = Storage::put('media-berita', $request->file('gambar_berita'));
            }
        }

        $validateData['id_kateber'] = $request->id_kateber;
        $validateData['unggulan'] = $request->unggulan ? $berita->created_at : null;

        berita::find($berita->id_berita)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/kateber/berita/'. Crypt::encryptString($request->id_kateber));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroyBerita($id_berita)
    {
        $berita = berita::find(Crypt::decryptString($id_berita));
                
        if ($berita->gambar_berita) {
            if (Storage::exists($berita->gambar_berita)) {
                Storage::delete($berita->gambar_berita);
            }
        }

        berita::destroy($berita->id_berita);

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/kateber/berita/' . Crypt::encryptString($berita->id_kateber));
    }

    //Image Upload Function
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('storage/media-berita/ck-editor'), $fileName);

            $url = asset('storage/media-berita/ck-editor/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }
}
