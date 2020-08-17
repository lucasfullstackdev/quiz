<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoRespostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_respostas', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('sku');

            $table->integer('questionario_id')->unsigned()->nullable();
            $table->foreign('questionario_id')->references('id')->on('questionarios');

            $table->integer('pergunta_id')->unsigned()->nullable();
            $table->foreign('pergunta_id')->references('id')->on('perguntas');

            $table->integer('pergunta_opcao_id')->unsigned()->nullable();
            $table->foreign('pergunta_opcao_id')->references('id')->on('pergunta_opcoes');

            $table->text('vl_pergunta')->nullable();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('historico_respostas');
    }
}
