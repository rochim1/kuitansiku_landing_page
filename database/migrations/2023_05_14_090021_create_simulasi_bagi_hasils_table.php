<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulasiBagiHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulasi_bagi_hasils', function (Blueprint $table) {
            $table->id('id_simulasi_bagi_hasil');
            $table->string('nominal');
            $table->string('jangka_waktu');
            $table->string('total_bagi_hasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simulasi_bagi_hasil');
    }
}
