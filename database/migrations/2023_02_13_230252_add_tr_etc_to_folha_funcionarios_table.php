<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrEtcToFolhaFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('folha_funcionarios', function (Blueprint $table) {
            $table->integer('s_base')->nullable()->after('id_folha');
            $table->integer('t_remuneracao')->nullable()->after('s_base');
            $table->integer('t_desconto')->nullable()->after('t_remuneracao');
            $table->integer('t_liquido')->nullable()->after('t_desconto');
            $table->integer('irt')->nullable()->after('t_liquido');
            $table->integer('mes')->after('irt');
            $table->integer('ano')->after('mes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('folha_funcionarios', function (Blueprint $table) {
            $table->dropColumn('s_base');
            $table->dropColumn('t_remuneracao');
            $table->dropColumn('t_desconto');
            $table->dropColumn('t_liquido');
            $table->dropColumn('irt');
            $table->dropColumn('mes');
            $table->dropColumn('ano');
        });
    }
}
