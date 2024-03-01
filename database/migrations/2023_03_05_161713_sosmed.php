<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sosmed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sosmed', function (Blueprint $table) {
            $table->id("id_sosmed");
            $table->bigInteger('id_penyedia_sosmed')->unsigned();
            $table->text("alamat_sosmed");
            $table->timestamps();

            $table->foreign('id_penyedia_sosmed')->references("id_penyedia_sosmed")->on("penyedia_sosmed")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sosmeds');
    }
}
