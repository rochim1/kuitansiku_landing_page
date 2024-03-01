<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePanel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('panel', function (Blueprint $table) {
            $table->text("logo_panel_keempat")->nullable()->nullable();
            $table->string("judul_panel_keempat", 100)->nullable();
            $table->text("deskripsi_panel_keempat")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
