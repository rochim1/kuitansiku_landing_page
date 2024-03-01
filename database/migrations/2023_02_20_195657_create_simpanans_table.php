<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpanan', function (Blueprint $table) {
            $table->id("id_simpanan");
            $table->bigInteger("id_katesim")->unsigned()->nullable();
            $table->text("deskripsi_simpanan")->nullable();
            $table->timestamps();

            $table->foreign('id_katesim')->references("id_katesim")->on("katesim")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simpanan');
    }
}
