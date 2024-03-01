<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::middleware(['defaultMiddleware'])->group(function () {
    Route::get('/', [ViewController::class, 'home']);
    Route::middleware(['informasiBerita'])->group(function () {
        Route::get('/sejarah', [ViewController::class, 'sejarah']);
        Route::get('/visi_misi', [ViewController::class, 'visiMisi']);
        Route::get('/legalitas', [ViewController::class, 'legalitas']);
        Route::get('/struktur_kepengurusan', [ViewController::class, 'strukturKepengurusan']);
        Route::get('/deposito_syariah', [ViewController::class, 'katedeposito']);
        Route::get('/deposito_syariah/{id_depsyar}', [ViewController::class, 'deposito_syariah']);
        Route::get('/pembiayaan', [ViewController::class, 'pembiayaan']);
        Route::get('/simpanan', [viewController::class, 'simpanan']);
        Route::get('/zis', [ViewController::class, 'zis']);
        Route::get('/kalkulator', [ViewController::class, 'kalkulator']);
        Route::get('/berita', [ViewController::class, 'berita']);
        Route::get('/berita/arsip/{arsip}', [ViewController::class, 'beritaArsip']);
        Route::post('/berita/arsip/{arsip}', [ViewController::class, 'beritaArsip']);
        Route::get('/berita/kategori/{kategori}', [ViewController::class, 'beritaKategori']);
        Route::post('/berita/kategori/{kategori}', [ViewController::class, 'beritaKategori']);
        Route::post('/berita', [ViewController::class, 'berita']);
        Route::get('/berita/detail/{id}', [ViewController::class, 'detailBerita']);
    });
    Route::get('/galeri', [ViewController::class, 'galeri']);
    Route::get('/kontak', [ViewController::class, 'kontak']);
    Route::post('/kritikSaran/store/', [ViewController::class, 'kritikSaran']);
});