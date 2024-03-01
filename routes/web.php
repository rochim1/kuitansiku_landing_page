<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DepositoSyariahController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ImageTitleController;
use App\Http\Controllers\JamOperasionalController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\KalkupemController;
use App\Http\Controllers\KateberController;
use App\Http\Controllers\KatedepositoController;
use App\Http\Controllers\KatepemController;
use App\Http\Controllers\KatesimController;
use App\Http\Controllers\KatestrukepController;
use App\Http\Controllers\KegiatanzisController;
use App\Http\Controllers\KeunggulanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\KotakSaranController;
use App\Http\Controllers\LayangpandangController;
use App\Http\Controllers\LegalitasController;
use App\Http\Controllers\LinkPendaftaranController;
use App\Http\Controllers\mapsController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PembiayaanController;
use App\Http\Controllers\PersyaratanMenabungController;
use App\Http\Controllers\PersyaratanPembiayaanController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\StrukepController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\ZisController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('storage/{dir}/{dirdok}/{file}', function ($dir, $dirdok, $file) {
    $path = storage_path('app'
    . DIRECTORY_SEPARATOR . $dir
    . DIRECTORY_SEPARATOR . $dirdok
    . DIRECTORY_SEPARATOR . $file);
    return response()->file($path);
});

Route::get('storage/{dir}/{file}', function ($dir, $file) {
    $path = storage_path('app'
    . DIRECTORY_SEPARATOR . $dir
    . DIRECTORY_SEPARATOR . $file);
    return response()->file($path);
});

Auth::routes();

Route::group(['middleware' => ['super_user']], function () {
    Route::resource('/admin/user', UserController::class);
    Route::get('/admin/profil', [AdminController::class, 'profilAdmin']);
    Route::post('/admin/update_profil', [AdminController::class, 'updateProfil']);
});

// Route::group(['middleware' => ['auth', 'verified']], function () {
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/admin/logout', [AdminController::class, 'logout']);

    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('/admin/sejarah', SejarahController::class);
    Route::post('admin/sejarah/ckeditor/upload', [SejarahController::class, 'upload'])->name('ckeditor.sejarah');

    Route::resource('/admin/visi_misi', VisiMisiController::class);
   
    Route::resource('/admin/legalitas', LegalitasController::class);

    Route::post('/update/ketOperasional', [JamOperasionalController::class, 'updateKeteranganOperasional']);

    Route::resource('/admin/katestrukep', KatestrukepController::class);
    Route::get('/admin/katestrukep/strukep/{id_katestrukep}', [StrukepController::class, 'indexStrukep']);
    Route::get('/admin/katestrukep/strukep/create/{id_katestrukep}', [StrukepController::class, 'createStrukep']);
    Route::post('/admin/katestrukep/strukep/store/', [StrukepController::class, 'storeStrukep']);
    Route::get('/admin/katestrukep/strukep/edit/{id_strukep}', [StrukepController::class, 'editStrukep']);
    Route::put('/admin/katestrukep/strukep/update/{id_strukep}', [StrukepController::class, 'updateStrukep']);
    Route::delete('/admin/katestrukep/strukep/destroy/{id_strukep}', [StrukepController::class, 'destroyStrukep']);

    Route::resource('/admin/keunggulan', KeunggulanController::class);

    Route::resource('/admin/sosmed', SosmedController::class);

    Route::resource('/admin/jam_operasional', JamOperasionalController::class);
    
    Route::resource('/admin/maps', mapsController::class);
    Route::resource('/admin/layangpandang', LayangpandangController::class);

    Route::resource('/admin/katesim', KatesimController::class);
    Route::resource('/admin/katedeposito', KatedepositoController::class);

    Route::resource('/admin/deposito_syariah', DepositoSyariahController::class);
    Route::post('/admin/deposito_syariah/deskripsi/create', [DepositoSyariahController::class, 'deskripsiCreate']);
    Route::post('admin/deposito_syariah/ckeditor/upload', [DepositoSyariahController::class, 'upload'])->name('ckeditor.deposito_syariah');

    Route::resource('/admin/katepem', KatepemController::class);

    Route::resource('/admin/pembiayaan', PembiayaanController::class);
    Route::post('admin/pembiayaan/ckeditor/upload', [PembiayaanController::class, 'upload'])->name('ckeditor.pembiayaan');

    Route::resource('/admin/sejarah', SejarahController::class);
    
    Route::resource('/admin/simpanan', SimpananController::class);
    Route::post('admin/simpanan/ckeditor/upload', [SimpananController::class, 'upload'])->name('ckeditor.simpanan');
    
    Route::resource('/admin/sosmed', SosmedController::class);

    Route::resource('/admin/kontak', KontakController::class);
    Route::post('admin/kontak/update/deskontak', [KontakController::class, 'updateKeteranganLinkKontak'])->name('update.kontak');
    Route::post('admin/kontak/update/linkwa', [KontakController::class, 'updateLinkWA'])->name('update.updateLinkWA');

    Route::resource('/admin/zis', ZisController::class);
    Route::post('admin/zis/ckeditor/upload', [ZisController::class, 'upload'])->name('ckeditor.zis');

    Route::resource('/admin/kalkupem', KalkupemController::class);
    Route::post('/admin/kalkupem/deskripsi/create', [KalkupemController::class, 'deskripsiCreate']);

    Route::resource('/admin/jumbotron', JumbotronController::class);

    Route::resource('/admin/panel', PanelController::class);
    Route::post('admin/panel/logo_panel/', [PanelController::class, 'removeImage']);

    Route::resource('/admin/tentang_kami', TentangKamiController::class);
    
    Route::resource('/admin/persyaratan_pembiayaan', PersyaratanPembiayaanController::class);
    Route::resource('/admin/persyaratan_menabung', PersyaratanMenabungController::class);

    Route::post('admin/kateber/berita/ckeditor/upload', [BeritaController::class, 'upload'])->name('ckeditor.berita');
    Route::resource('/admin/kateber', KateberController::class);
    Route::get('/admin/kateber/berita/{id_kateber}', [BeritaController::class, 'indexBerita']);
    Route::get('/admin/kateber/berita/create/{id_kateber}', [BeritaController::class, 'createBerita']);
    Route::post('/admin/kateber/berita/store/', [BeritaController::class, 'storeBerita']);
    Route::get('/admin/kateber/berita/show/{id_berita}', [BeritaController::class, 'showBerita']);
    Route::get('/admin/kateber/berita/edit/{id_berita}', [BeritaController::class, 'editBerita']);
    Route::put('/admin/kateber/berita/update/{id_berita}', [BeritaController::class, 'updateBerita']);
    Route::delete('/admin/kateber/berita/destroy/{id_berita}', [BeritaController::class, 'destroyBerita']);

    Route::resource('/admin/galeri', GaleriController::class);

    Route::resource('/admin/kotak_saran', KotakSaranController::class);
    
    Route::resource('/admin/kegiatan_zis', KegiatanzisController::class);
    
    Route::resource('/admin/image_title', ImageTitleController::class);
    Route::resource('/admin/linkPendaftaran', LinkPendaftaranController::class);
});

Route::get('/verify/{id_user}/{matcher}', [UserController::class, 'verifyMail']);
Route::get('/send/mail/verify/{id_user}', [UserController::class, 'sendVerifyMail']);