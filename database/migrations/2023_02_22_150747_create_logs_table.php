<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string('msg')->nullable();
            $table->string('contexto')->nullable();
            $table->string('nivel')->nullable();
            $table->string('nivel_nome')->nullable();
            $table->string('canal')->nullable();
            $table->string('datetime' )->nullable();
            $table->string('extra' )->nullable();
            $table->string( 'user_id')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return vostring
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
