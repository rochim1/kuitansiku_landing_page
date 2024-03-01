<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class linkPendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $link = [
            (object)[
                "nama_link" => "pendaftaran",
                "link" => "https://bit.ly/FormPendaftaranKeanggotanKSPPSBMTAMS",
                "keterangan" => "",
            ],
            (object)[
                "nama_link" => "pembukaan simpanan",
                "link" => "https://bit.ly/SimpananBMT",
                "keterangan" => "",
            ],
            (object)[
                "nama_link" => "pembiayaan",
                "link" => "https://bit.ly/PembiayaanBMTAMS",
                "keterangan" => "",
            ]
        ];

        foreach ($link as $key => $value) {
            DB::table('link_pendaftaran')->insert([
                'nama_link' => $value->nama_link,
                'link' => $value->link,
                'keterangan' => $value->keterangan,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
