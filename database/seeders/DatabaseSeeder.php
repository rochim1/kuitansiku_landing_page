<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(namaLegalitas::class);
        // $this->call(penyediaSosmed::class);
        $this->call(linkPendaftaran::class);
        // \App\Models\User::factory(10)->create();
    }
}
