<?php

use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltasFustificadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faltas_fustificadas', function (Blueprint $table) {
            $table->id();
            $table->string('motivo')->nullable();
            $table->text('anexo')->nullable();
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('id_falta')->nullable();
            $table->foreign('id_falta')->references('id')->on('faltas')->onDelete('cascade');
            $table->unsignedBigInteger('id_funcionario')->nullable();
            $table->foreign('id_funcionario')->references('id')->on('test_funcionario')->onDelete('cascade');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faltas_fustificadas');
    }
}
