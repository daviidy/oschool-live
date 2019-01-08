<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProgressionIdFieldToEtatprogressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etatprogressions', function (Blueprint $table) {
          $table->integer('progression_id')->unsigned()->nullable();
          $table->foreign('progression_id')->references('id')->on('progressions');
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
            $table->dropColumn('progression_id');
        });
    }
}
