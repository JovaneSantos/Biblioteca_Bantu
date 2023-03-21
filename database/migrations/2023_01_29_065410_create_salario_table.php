<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salario', function (Blueprint $table) {
            $table->id();
            $table->integer('salario_base');
            $table->integer('seguranca_social');
            $table->integer('seguro_suade',500);
            $table->integer('sub_ferias',500);
            $table->integer('irt');
            $table->integer('total_desconto');
            $table->integer('salario_liquido');
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salario');
    }
}

