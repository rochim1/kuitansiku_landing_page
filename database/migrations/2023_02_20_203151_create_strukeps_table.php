<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strukep', function (Blueprint $table) {
            $table->id("id_strukep");
            $table->bigInteger("id_katestrukep")->unsigned()->nullable();
            $table->string("nama")->nullable();
            $table->string("jabatan")->nullable();
            $table->timestamps();

            $table->foreign('id_katestrukep')->references("id_katestrukep")->on("katestrukep")->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strukeps');
    }
}
