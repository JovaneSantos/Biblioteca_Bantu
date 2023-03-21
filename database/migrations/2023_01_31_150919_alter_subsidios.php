<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSubsidios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subsidios', function (Blueprint $table) {
            $table->foreign('id_funcionario')->references('id')->on('funcionario')->onDelete('cascade');;
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
            $table->dropForeign('funcionarios_id_departamento_id_foreign');
        });
    }
}
