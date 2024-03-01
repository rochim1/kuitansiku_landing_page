<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id("id_berita");
            $table->bigInteger("id_kateber")->unsigned()->nullable();
            $table->text("gambar_berita")->nullable();
            $table->string("judul_berita")->nullable();
            $table->text("deskripsi_berita")->nullable();
            $table->foreignId('dibuat')->constrained('users')->onDelete("cascade")->onUpdate("cascade")->nullable();
            $table->integer("dilihat")->nullable()->nullable();
            $table->dateTime("unggulan")->nullable()->nullable();
            $table->timestamps();

            $table->foreign('id_kateber')->references("id_kateber")->on("kateber")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
}
