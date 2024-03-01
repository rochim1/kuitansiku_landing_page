<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembiayaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembiayaan', function (Blueprint $table) {
            $table->id("id_pembiayaan");
            $table->bigInteger("id_katepem")->unsigned()->nullable();
            $table->text("deskripsi_pembiayaan")->nullable();
            $table->timestamps();

            $table->foreign('id_katepem')->references("id_katepem")->on("katepem")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembiayaans');
    }
}
