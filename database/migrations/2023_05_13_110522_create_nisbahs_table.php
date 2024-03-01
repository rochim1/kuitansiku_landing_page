<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Doctrine\DBAL\Driver\AbstractMySQLDriver;
class CreateNisbahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('deposito_syariah', 'nisbah');

        //composer require doctrine/dbal run it first
        Schema::table('nisbah', function (Blueprint $table) {
            $table->renameColumn("id_deposito_syariah", "id_nisbah");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nisbah');
    }
}
