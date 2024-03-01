<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class namaLegalitas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sosmed = [
            (object)[
                'nama_legalitas' => 'Nama Lembaga'
            ],
            (object)[
                'nama_legalitas' => 'Alamat Kantor',
            ],
            (object)[
                'nama_legalitas' => 'Alamat Email',
            ],
            (object)[
                'nama_legalitas' => 'Alamat Website',
            ],
            (object)[
                'nama_legalitas' => 'Dasar Hukum Pendirian',
            ],
            (object)[
                'nama_legalitas' => 'Kegiatan Usaha',
            ],
        ];

        foreach ($sosmed as $key => $value) {
            DB::table('nama_legalitas')->insert([
                'nama_legalitas' => $value->nama_legalitas,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
