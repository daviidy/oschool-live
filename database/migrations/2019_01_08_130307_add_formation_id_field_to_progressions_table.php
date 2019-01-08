<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormationIdFieldToProgressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('progressions', function (Blueprint $table) {
          $table->integer('formation_id')->unsigned()->nullable();
          $table->foreign('formation_id')->references('id')->on('formations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('progressions', function (Blueprint $table) {
            $table->dropColumn('formation_id');
        });
    }
}
