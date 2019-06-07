<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategorycharacIdFieldToCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('characteristics', function (Blueprint $table) {
          $table->integer('categorycharac_id')->unsigned()->nullable();
          $table->foreign('categorycharac_id')->references('id')->on('categorycharacs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characteristics', function (Blueprint $table) {
            //
        });
    }
}
