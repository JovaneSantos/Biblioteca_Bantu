<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTestFuncionarios1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_funcionario', function (Blueprint $table) {
        $table->unsignedBigInteger('id_departamento')->after('cargo');
        $table->foreign('id_departamento')->references('id')->on('departamentos')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('test_funcionarios', function (Blueprint $table) {
            $table->dropColumn('id_departamento');
            $table->dropForeign('funcionarios_id_departamento_id_foreign');
        });
    }
}
