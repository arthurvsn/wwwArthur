<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegitrosPontoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros-ponto', function (Blueprint $table) {
            $table->increments('id_registros_ponto');
            $table->date('data_ponto');
            $table->time('hora_ponto');
            $table->integer('id_tipo_opcao_ponto');
            $table->integer('id_usuario');
            $table->rememberToken();
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
        Schema::dropIfExists('registros-ponto');
    }
}
