<?php

namespace App\Http\Controllers;

use App\Models\imagetitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ImageTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.imagetitle.index', [
            'title' => 'Image Title',
            'no' => 1,
            'imagetitle' => imagetitle::orderBy('created_at', 'DESC')->get()
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
     * @param  \App\Models\imagetitle  $imagetitle
     * @return \Illuminate\Http\Response
     */
    public function show(imagetitle $imagetitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imagetitle  $imagetitle
     * @return \Illuminate\Http\Response
     */
    public function edit($id_imagetitle)
    {
        return view('admin.imagetitle.edit', [
            'title' => 'Edit Image Title',
            'imagetitle' => imagetitle::find(Crypt::decryptString($id_imagetitle))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imagetitle  $imagetitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_imagetitle)
    {
        $imagetitle = imagetitle::find(Crypt::decryptString($id_imagetitle));

        $validateData = $request->validate([
            'imagetitle' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
        ], [
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!',
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        if ($request->file('imagetitle')) {
            if ($request->imagetitle) {
                if (Storage::exists($imagetitle->imagetitle)) {
                    Storage::delete($imagetitle->imagetitle);
                }

                $validateData['imagetitle'] = Storage::put('media-imagetitle', $request->file('imagetitle'));
            }
        }

        imagetitle::find($imagetitle->id_imagetitle)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/image_title');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imagetitle  $imagetitle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_imagetitle)
    {
        $imagetitle = imagetitle::find(Crypt::decryptString($id_imagetitle));

        if ($imagetitle->imagetitle) {
            if (Storage::exists($imagetitle->imagetitle)) {
                Storage::delete($imagetitle->imagetitle);
            }
        }

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/image_title');
    }
}
