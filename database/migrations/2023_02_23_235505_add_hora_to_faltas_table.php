<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHoraToFaltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faltas', function (Blueprint $table) {
            $table->integer('dia')->after('data_falta')->nullable();
            $table->integer('mes')->after('dia')->nullable();
            $table->integer('ano')->after('mes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faltas', function (Blueprint $table) {
            $table->dropColumn('dia');
            $table->dropColumn('mes');
            $table->dropColumn('ano');
        });
    }
}
