<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ds_pergunta');
            
            $table->integer('tipo_pergunta_id')->unsigned();
            $table->foreign('tipo_pergunta_id')->references('id')->on('tipo_perguntas');
            
            $table->boolean('sn_primeiro')->default(false);
            $table->boolean('sn_ultimo')->default(false);

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
        Schema::dropIfExists('perguntas');
    }
}
