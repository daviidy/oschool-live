<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->default('aucun');
            $table->string('lien')->default('aucun');;
            $table->string('editor1')->default('aucun');;
            $table->string('editor2')->default('aucun');;
            $table->string('editor3')->default('aucun');;
            $table->string('editor4')->default('aucun');;
            $table->string('editor5')->default('aucun');;
            $table->string('editor6')->default('aucun');;
            $table->string('editor7')->default('aucun');;
            $table->string('editor8')->default('aucun');;
            $table->string('editor9')->default('aucun');;
            $table->string('editor10')->default('aucun');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
