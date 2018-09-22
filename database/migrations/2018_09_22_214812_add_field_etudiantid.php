<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldEtudiantid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('classrooms', function (Blueprint $table) {
             $table->double('idEtudiant');
         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('classrooms', function (Blueprint $table) {
             $table->dropColumn('idEtudiant');
         });
     }
}
