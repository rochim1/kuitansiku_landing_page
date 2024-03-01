<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotakSaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kotak_saran', function (Blueprint $table) {
            $table->bigIncrements('id_kotak_saran');
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->text('saran')->nullable();
            $table->text('open')->nullable();
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
        Schema::dropIfExists('kotak_sarans');
    }
}
