<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSalalrios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vencimento', function (Blueprint $table) {
            $table->foreign('id_funcionario')->references('id')->on('test_funcionario')->onDelete('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vencimento', function (Blueprint $table) {
            $table->dropColumn('id_funcionario');
            $table->dropForeign('vencimento_id_funcionario_foreign');
        });
    }
}
