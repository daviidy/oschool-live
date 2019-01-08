<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToEtatprogressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etatprogressions', function (Blueprint $table) {
          $table->string('statut');
          $table->integer('progression_id');
          $table->integer('user_id')->unsigned()->nullable();
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etatprogressions', function (Blueprint $table) {
            $table->dropColumn('statut');
            $table->dropColumn('progression_id');
            $table->dropColumn('user_id');
        });
    }
}
