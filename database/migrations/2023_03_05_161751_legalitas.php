<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Legalitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legalitas', function (Blueprint $table) {
            $table->id("id_legalitas");
            $table->bigInteger('id_nama_legalitas')->unsigned();
            $table->text("deskripsi_legalitas");
            $table->timestamps();

            $table->foreign('id_nama_legalitas')->references("id_nama_legalitas")->on("nama_legalitas")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('legalitas');
    }
}
