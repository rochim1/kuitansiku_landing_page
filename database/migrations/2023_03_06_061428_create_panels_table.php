<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panel', function (Blueprint $table) {
            $table->id("id_panel");
            $table->text("logo_panel_pertama")->nullable();
            $table->string("judul_panel_pertama", 100)->nullable();
            $table->text("deskripsi_panel_pertama")->nullable();
            $table->text("logo_panel_kedua")->nullable()->nullable();
            $table->string("judul_panel_kedua", 100)->nullable();
            $table->text("deskripsi_panel_kedua")->nullable();
            $table->text("logo_panel_ketiga")->nullable()->nullable();
            $table->string("judul_panel_ketiga", 100)->nullable();
            $table->text("deskripsi_panel_ketiga")->nullable();
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
        Schema::dropIfExists('panels');
    }
}
