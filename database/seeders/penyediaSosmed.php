<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penyediaSosmed extends Seeder
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
                'nama_sosmed' => 'instagram'
            ],
            (object)[
                'nama_sosmed' => 'facebook',
            ],
            (object)[
                'nama_sosmed' => 'tiktok',
            ],
            (object)[
                'nama_sosmed' => 'youtube',
            ],
            (object)[
                'nama_sosmed' => 'email',
            ],
            (object)[
                'nama_sosmed' => 'telpon',
            ],
            (object)[
                'nama_sosmed' => 'fax',
            ],
        ];

        foreach ($sosmed as $key => $value) {
            DB::table('penyedia_sosmed')->insert([
                'nama_penyedia_sosmed' => $value->nama_sosmed,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
