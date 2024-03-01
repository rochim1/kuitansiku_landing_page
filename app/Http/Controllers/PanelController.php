<?php

namespace App\Http\Controllers;

use App\Models\panel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.panel', [
            'title' => 'Panel',
            'panel' => panel::first()
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
            'logo_panel_pertama' => '|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_pertama' => '',
            'deskripsi_panel_pertama' => '',
            'logo_panel_kedua' => '|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_kedua' => '',
            'deskripsi_panel_kedua' => '',
            'logo_panel_ketiga' => '|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_ketiga' => '',
            'deskripsi_panel_ketiga' => '',
            'logo_panel_keempat' => '|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_keempat' => '',
            'deskripsi_panel_keempat' => '',
        ], [
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!',
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        if ($request->file('logo_panel_pertama')) {
            if ($request->logo_panel_pertama) {
                $validateData['logo_panel_pertama'] = Storage::put('media-panel', $request->file('logo_panel_pertama'));
            }
        }

        if ($request->file('logo_panel_kedua')) {
            if ($request->logo_panel_kedua) {
                $validateData['logo_panel_kedua'] = Storage::put('media-panel', $request->file('logo_panel_kedua'));
            }
        }

        if ($request->file('logo_panel_ketiga')) {
            if ($request->logo_panel_ketiga) {
                $validateData['logo_panel_ketiga'] = Storage::put('media-panel', $request->file('logo_panel_ketiga'));
            }
        }

        if ($request->file('logo_panel_keempat')) {
            if ($request->logo_panel_keempat) {
                $validateData['logo_panel_keempat'] = Storage::put('media-panel', $request->file('logo_panel_keempat'));
            }
        }
        
        panel::create($validateData);

        Alert::success('kerja bagus', 'Data berhasil disimpan!');
        return redirect('/admin/panel');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\panel  $panel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_panel)
    {
        $panel = panel::find(Crypt::decryptString($id_panel));

        $validateData = $request->validate([
            'logo_panel_pertama' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_pertama' => '',
            'deskripsi_panel_pertama' => '',
            'logo_panel_kedua' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_kedua' => '',
            'deskripsi_panel_kedua' => '',
            'logo_panel_ketiga' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_ketiga' => '',
            'deskripsi_panel_ketiga' => '',
            'logo_panel_keempat' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:10240',
            'judul_panel_keempat' => '',
            'deskripsi_panel_keempat' => '',
        ], [
            'mimes' => 'Format :attribute salah!',
            'max' => 'Ukuran :attribute terlalu besar!',
            'required' =>  ':attribute tidak boleh kosong!'
        ]);

        if ($request->file('logo_panel_pertama')) {
            if ($request->logo_panel_pertama) {
                if (Storage::exists($panel->logo_panel_pertama)) {
                    Storage::delete($panel->logo_panel_pertama);
                }

                $validateData['logo_panel_pertama'] = Storage::put('media-panel', $request->file('logo_panel_pertama'));
            }
        }

        if ($request->file('logo_panel_kedua')) {
            if ($request->logo_panel_kedua) {
                if (Storage::exists($panel->logo_panel_kedua)) {
                    Storage::delete($panel->logo_panel_kedua);
                }

                $validateData['logo_panel_kedua'] = Storage::put('media-panel', $request->file('logo_panel_kedua'));
            }
        }

        if ($request->file('logo_panel_ketiga')) {
            if ($request->logo_panel_ketiga) {
                if (Storage::exists($panel->logo_panel_ketiga)) {
                    Storage::delete($panel->logo_panel_ketiga);
                }

                $validateData['logo_panel_ketiga'] = Storage::put('media-panel', $request->file('logo_panel_ketiga'));
            }
        }
        
        if ($request->file('logo_panel_keempat')) {
            if ($request->logo_panel_keempat) {
                if (Storage::exists($panel->logo_panel_keempat)) {
                    Storage::delete($panel->logo_panel_keempat);
                }

                $validateData['logo_panel_keempat'] = Storage::put('media-panel', $request->file('logo_panel_keempat'));
            }
        }

        panel::find($panel->id_panel)->update($validateData);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/panel');
    }

    public function removeImage(Request $request)
    {
        if (Storage::exists($request->logo_panel)) {
            Storage::delete($request->logo_panel);
        }
        
        Alert::success('kerja bagus', 'Gambar berhasil dihapus!');
        return redirect('/admin/panel');
    }
}
