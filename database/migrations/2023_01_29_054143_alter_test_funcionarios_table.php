<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTestFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('test_funcionario', function (Blueprint $table) {
            $table->string('email',200)->after('nome');
            $table->integer('telefone')->after('email');
            $table->string('endereco',500)->after('telefone');
            $table->string('cargo',500)->after('endereco');
            $table->time('hora_entrada')->after('cargo');
            $table->time('hora_saida')->after('hora_entrada');
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
            $table->dropColumn('email');
            $table->dropColumn('telefone');
            $table->dropColumn('endereco');
            $table->dropColumn('cargo');
            $table->dropColumn('hora_entrada');
            $table->dropColumn('hora_saida');
            //$table->dropForeign('funcionarios_id_departamento_id_foreign');
        });
    }
}
