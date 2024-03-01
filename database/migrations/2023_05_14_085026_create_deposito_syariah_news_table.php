<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositoSyariahNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposito_syariah', function (Blueprint $table) {
            $table->id("id_depsyar");
            $table->bigInteger("id_katedeposito")->unsigned()->nullable();
            $table->text("deskripsi_depsyar");
            $table->foreign('id_katedeposito')->references("id_katedeposito")->on("katedeposito")->onDelete("cascade")->onUpdate("cascade"); 
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
        Schema::dropIfExists('deposito_syariah_news');
    }
}
