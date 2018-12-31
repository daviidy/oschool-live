<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjetIdToEtatprojetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etatprojets', function (Blueprint $table) {
          $table->integer('projet_id')->unsigned()->nullable();
          $table->foreign('projet_id')->references('id')->on('projets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etatprojets', function (Blueprint $table) {
            $table->dropColumn('projet_id');
        });
    }
}
