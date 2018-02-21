<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcoesPontoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcao_pontos', function (Blueprint $table) {
            $table->increments('id_opcoes_ponto');
            $table->string('nome', 25);
            $table->enum('status', ['A', 'I'])->default("A");
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
        Schema::dropIfExists('opcoes_pontos');
    }
}
