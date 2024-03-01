<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\berita;
use App\Models\deposito_syariah;
use App\Models\deskripsi_depsyar;
use App\Models\deskripsi_kalkupem;
use App\Models\galeri;
use App\Models\imagetitle;
use App\Models\jumbotron;
use App\Models\kalkupem;
use App\Models\katedeposito;
use App\Models\katepem;
use App\Models\katesim;
use App\Models\katestrukep;
use App\Models\kegiatanzis;
use App\Models\keunggulan;
use App\Models\kontak;
use App\Models\kotak_saran;
use App\Models\layangPandang;
use App\Models\legalitas;
use App\Models\linkPendaftaran;
use App\Models\maps;
use App\Models\misi;
use App\Models\nisbah;
use App\Models\panel;
use App\Models\persyaratan_menabung;
use App\Models\persyaratan_pembiayaan;
use App\Models\sejarah;
use App\Models\sosmed;
use App\Models\tentang_kami;
use App\Models\visi;
use App\Models\zis;
use Illuminate\Support\Facades\Crypt;
class ViewController extends Controller
{
    function home(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.home', [
            'daftar' => linkPendaftaran::where('nama_link', 'pendaftaran anggota')->first()?->link,
            'jumbotron' => jumbotron::all(),
            'panel' => panel::first(),
            'keunggulan' => keunggulan::get(),
            'tentang_kami' => tentang_kami::first(),
            'berita_unggulan' => berita::with('user')->whereNotNull('unggulan')->orderBy('created_at', 'DESC')->get(),
            'persyaratan_menabung' => persyaratan_menabung::all(),
            'persyaratan_pembiayaan' => persyaratan_pembiayaan::all(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => $data['sosmed'],
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'linkWA' => $data['linkWA']
        ]);
    }

    function sejarah(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.about.sejarah', [
            'sejarah' => sejarah::first(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'sejarah')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function visiMisi(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.about.visi_misi', [
            'visi' => visi::first(),
            'misi' => misi::first(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'visi misi')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function legalitas(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.about.legalitas', [
            'legalitas' => legalitas::with('namaLegalitas')->get(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'legalitas')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function strukturKepengurusan(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.about.struktur_kepengurusan', [
            'katestrukeps' => katestrukep::with('strukep')->get(),
            'abjad' => 'A',
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'struktur kepengurusan')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function katedeposito(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.produk.katedeposito', [
            'katedeposito' => katedeposito::with('deposito')->get(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            // 'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'depostio syariah')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function deposito_syariah(Request $request, $nama_katedepsyar)
    {
        $data = $request->attributes->get('data');
        $deposito_syariah = deposito_syariah::JoinKateDeposito()
        ->where('katedeposito.nama_katedeposito',$nama_katedepsyar)->first();
        return view('user.produk.deposito_syariah', [
            'nisbah' => nisbah::get(),
            'deposito_syariah' => $deposito_syariah,
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'depostio syariah')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function pembiayaan(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.produk.pembiayaan', [
            'daftarPembiayaan' => linkPendaftaran::where('nama_link', 'pembiayaan')->first()?->link,
            'katepems' => katepem::with('pembiayaan')->get(),
            'kalkupem' => kalkupem::all(),
            'deskripsi_kalkupem' => deskripsi_kalkupem::first(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'pembiayaan')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function simpanan(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.produk.simpanan', [
            'daftarSimpanan' => linkPendaftaran::where('nama_link', 'pembukaan simpanan')->first()?->link,
            'katesims' => katesim::with('simpanan')->get(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'simpanan')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function zis(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.produk.zis', [
            'zis' => zis::first(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'kegiatanzis' => kegiatanzis::all(),
            'imagetitle' => imagetitle::where('nama_title', '=', 'zis')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function kalkulator(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.produk.kalkulator', [
            'kalkupem' => kalkupem::all(),
            'deskripsi_kalkupem' => deskripsi_kalkupem::first(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'linkWA' => $data['linkWA']
        ]);
    }

    function berita(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.berita.berita', [
            'berita' =>
            berita::latest()->filter(request(['search']))->paginate(6)->withQueryString(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'kategori' => null,
            'arsip' => '',
            'imagetitle' => imagetitle::where('nama_title', '=', 'berita')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function beritaKategori(Request $request, $kategori)
    {
        $filter = ["search" => request()->search, "kategori" => $kategori];
        $data = $request->attributes->get('data');
        return view('user.berita.berita', [
            'berita' => berita::filter($filter)->latest()->paginate(6)->withQueryString(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'kategori' => $kategori,
            'arsip' => '',
            'imagetitle' => imagetitle::where('nama_title', '=', 'berita')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function beritaArsip(Request $request, $arsip)
    {
        $filter = ["search" => request()->search,"arsip" => $arsip];
        $data = $request->attributes->get('data');
        return view('user.berita.berita', [
            'berita' => berita::latest()->filter($filter)->paginate(6)->withQueryString(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'arsip' => $arsip,
            'kategori' => '',
            'imagetitle' => imagetitle::where('nama_title', '=', 'berita')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function detailBerita(Request $request, $id_berita)
    {
        $berita = berita::with('kateber', 'user')->find($id_berita);
        berita::find($berita->id_berita)->update([
            'dilihat' => $berita->dilihat + 1,
        ]);

        $data = $request->attributes->get('data');
        return view('user.berita.show', [
            'berita' => berita::orderBy('created_at', 'DESC')->get(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'detailBerita' => $berita,
            'beritaUnggulan' => $data['beritaUnggulan'],
            'beritaTerbaru' => $data['beritaTerbaru'],
            'kategoriBerita' => $data['kategoriBerita'],
            'linkWA' => $data['linkWA']
        ]);
    }

    function galeri(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.galeri.galeri', [
            'galeri' => galeri::orderBy('created_at', 'DESC')->get(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'linkWA' => $data['linkWA']
        ]);
    }

    function kontak(Request $request)
    {
        $data = $request->attributes->get('data');
        return view('user.kontak.kontak', [
            'kontak' => kontak::orderBy('created_at', 'DESC')->get(),
            'maps' => maps::first(),
            'layangPandang' => layangPandang::first(),
            'sosmed' => sosmed::with('penyediaSosmed')->get(),
            'jam_operasional' => $data['jam_operasional'],
            'ketOperasional' => $data['ketOperasional'],
            'alamat' => $data['alamat'],
            'email' => $data['email'],
            'kontak' => $data['kontak'],
            'katedeposito' => $data['katedeposito'],
            'imagetitle' => imagetitle::where('nama_title', '=', 'kontak')->first(),
            'linkWA' => $data['linkWA']
        ]);
    }

    function kritikSaran(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'saran' => 'required',
            'open' => '',
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
        ]);

        $terkirim = kotak_saran::create($validateData);
        $terkirim? Alert::success('sukses', 'pesan terkirim!') : Alert::error('gagal', 'pesan gagal terkirim!');
        return redirect('/kontak');
    }
}
