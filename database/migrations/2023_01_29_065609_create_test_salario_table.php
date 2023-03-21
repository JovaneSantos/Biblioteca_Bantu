<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestSalarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_salario', function (Blueprint $table) {
            $table->id();
            $table->integer('salario_base');
            $table->integer('seguranca_social');
            $table->integer('seguro_suade');
            $table->integer('sub_ferias');
            $table->integer('irt')->nullable();
            $table->integer('total_desconto')->nullable();
            $table->integer('salario_liquido')->nullable();
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
        Schema::dropIfExists('test_salario');
    }
}
