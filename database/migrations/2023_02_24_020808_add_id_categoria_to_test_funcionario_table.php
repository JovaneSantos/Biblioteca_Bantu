<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdCategoriaToTestFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_funcionario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_categoria')->after('id_departamento');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->unsignedBigInteger('id_empresa')->after('id_categoria')->nullable();
            $table->foreign('id_empresa')->references('id')->on('info_empresas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_funcionario', function (Blueprint $table) {
            $table->dropForeign('id_categoria_test_funcionario_foreign');
            $table->dropForeign('id_empresa__test_funcionario_foreign');
           ;
        });
    }
}
