<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->string('endereco',500)->after('telefone');
            $table->string('cargo',500)->after('endereco');
            $table->integer('id_departamento')->after('cargo');
            $table->foreign('id_departamento')->references('id')->on('departamentos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->dropColumn('endereco');
            $table->dropColumn('cargo');
            $table->dropColumn('id_departamento');
            $table->dropForeign('funcionarios_id_departamento_id_foreign');
        });
    }
}
