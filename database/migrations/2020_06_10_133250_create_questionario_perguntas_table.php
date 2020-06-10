<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionarioPerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionario_perguntas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('questionario_id')->unsigned();
            $table->foreign('questionario_id')->references('id')->on('questionarios');

            $table->integer('pergunta_id')->unsigned();
            $table->foreign('pergunta_id')->references('id')->on('perguntas');

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
        Schema::dropIfExists('questionario_perguntas');
    }
}
