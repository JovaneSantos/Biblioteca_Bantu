<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('imagem')->after('username');
            $table->unsignedBigInteger('id_funcionario')->after('imagem')->nullable();
            $table->foreign('id_funcionario')->references('id')->on('test_funcionario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('imagem');
            $table->dropColumn('id_funcionario');
            $table->dropForeign('vencimento_id_funcionario_foreign');
        });
    }
}
