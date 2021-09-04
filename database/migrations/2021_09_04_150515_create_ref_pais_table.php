<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefPaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_pais', function (Blueprint $table) {
            $table->id('cod_pais');
            $table->string('ide_pais', 4);
            $table->string('nom_pais', 60);
            $table->string('nac_pais', 60);
            $table->string('ste_pais', 1);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_pais');
    }
}
