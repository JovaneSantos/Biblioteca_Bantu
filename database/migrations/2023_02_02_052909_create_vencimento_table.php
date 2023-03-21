<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVencimentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vencimento', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->float('desconto')->nullable();
            $table->float('remuneracao')->nullable();
            $table->unsignedBigInteger('id_funcionario');
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
        Schema::dropIfExists('vencimento');
    }
}
