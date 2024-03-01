<?php

namespace App\Http\Middleware;

use App\Models\deposito_syariah;
use Closure;
use Illuminate\Http\Request;
use App\Models\jam_operasional;
use App\Models\kateber;
use App\Models\katedeposito;
use App\Models\ketOperasional;
use App\Models\kontak;
use App\Models\layangPandang;
use App\Models\legalitas;
use App\Models\linkWA;
use App\Models\sosmed;

class defaultMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $sosmed = sosmed::with('penyediaSosmed')->get();

        $legalitas_raw = legalitas::JoinNamaLegalitas()->get();
        
        $legalitas = [];
        foreach ($legalitas_raw as $value) {
            if ($value->nama_legalitas == 'Nama Lembaga') {
                $legalitas['nama_lembaga'] = $value->deskripsi_legalitas;
            } elseif ($value->nama_legalitas == 'Alamat Kantor') {
                $legalitas['alamat_kantor'] = $value->deskripsi_legalitas;
            } elseif ($value->nama_legalitas == 'Alamat Email') {
                $legalitas['alamat_email'] = $value->deskripsi_legalitas;
            } elseif ($value->nama_legalitas == 'Alamat Website') {
                $legalitas['alamat_website'] = $value->deskripsi_legalitas;
            } elseif ($value->nama_legalitas == 'Dasar Hukum Pendirian') {
                $legalitas['dasar_hukum_pendirian'] = $value->deskripsi_legalitas;
            } else {
                $legalitas['kegiatan_usaha'] = $value->deskripsi_legalitas;
            }
        }
        
        $kontak = kontak::all();
        $layangpandang = layangPandang::first();
        $kategoriBerita = kateber::all();
        $linkWA = linkWA::first();
        $katedeposito = katedeposito::all();
        $data = [
            'jam_operasional' => jam_operasional::all(),
            'ketOperasional' => ketOperasional::first(),
            'legalitas' => $legalitas,
            'sosmed' => $sosmed, 
            'kontak' => $kontak,
            'layangpandang' => $layangpandang,
            'alamat' => isset($legalitas['alamat_kantor']) ? $legalitas['alamat_kantor'] : [],
            'email' => isset($legalitas['alamat_email']) ? $legalitas['alamat_email'] : [],
            'kategoriBerita' => $kategoriBerita,
            'katedeposito' => $katedeposito,
            'linkWA' => isset($linkWA) ? $linkWA->link_WA : '#',
        ];
        
        $request->attributes->add(['data' => $data]);
        return $next($request);
    }
}
