<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensagemAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagem_alunos', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('mensagem');
            $table->integer('id_bolsa')->unsigned();
            $table->foreign('id_bolsa')->references('id')->on('bolsa_alunos')->onDelete('cascade')->onUpdade('cascade');
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
        Schema::dropIfExists('mensagem_alunos');
    }
}
