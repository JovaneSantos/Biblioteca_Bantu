<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFavoritaToNotificacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notificacao', function (Blueprint $table) {
            $table->integer('favorito')->after('status')->default(0);
            $table->datetime('data')->after('favorito')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notificacao', function (Blueprint $table) {
            $table->dropColumn('favorito');
            $table->dropColumn('data');
        });
    }
}
