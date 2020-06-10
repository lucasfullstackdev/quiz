<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntaOpcao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pergunta_opcoes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('pergunta_id')->unsigned();
            $table->foreign('pergunta_id')->references('id')->on('perguntas');

            $table->string('ds_pergunta_opcao');

            $table->integer('next_pergunta_id')->unsigned();
            $table->foreign('next_pergunta_id')->references('id')->on('perguntas');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pergunta_opcoes');
    }
}
