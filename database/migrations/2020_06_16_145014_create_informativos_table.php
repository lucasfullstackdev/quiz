<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informativos', function (Blueprint $table) {
            $table->increments('id');

            $table->text('ds_informativo_view');
            
            $table->integer('questionario_id')->unsigned()->nullable();
            $table->foreign('questionario_id')->references('id')->on('questionarios');

            $table->boolean('sn_primeiro')->default(0);
            $table->boolean('sn_ultimo')->default(0);

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
        Schema::dropIfExists('informativos');
    }
}
