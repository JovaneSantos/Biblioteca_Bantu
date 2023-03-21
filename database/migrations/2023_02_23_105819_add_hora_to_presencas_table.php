<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHoraToPresencasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('presencas', function (Blueprint $table) {
            $table->integer('hora_entrada')->after('data_saida')->nullable();
            $table->integer('hora_saida')->after('hora_entrada')->nullable();
            $table->integer('dia')->after('hora_saida')->nullable();
            $table->integer('mes')->after('dia')->nullable();
            $table->integer('ano')->after('mes')->nullable();
        });
    }

    /**hora_entrada
     * hora_saida
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presencas', function (Blueprint $table) {
            $table->dropColumn('hora');
            $table->dropColumn('dia');
            $table->dropColumn('mes');
            $table->dropColumn('ano');
        });
    }
}
