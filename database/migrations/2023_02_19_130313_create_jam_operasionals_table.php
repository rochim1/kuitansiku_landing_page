<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamOperasionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jam_operasional', function (Blueprint $table) {
            $table->id("id_jam_operasional")->nullable();
            $table->string("hari")->nullable();
            $table->enum('status', ['kerja', 'libur'])->nullable();
            $table->time("jam_mulai")->nullable();
            $table->time("jam_selesai")->nullable();
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
        Schema::dropIfExists('jam_operasionals');
    }
}
