<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('datedemande');
            $table->string('situation');



            $table->integer('typedemande_id')->unsigned();
            $table->foreign('typedemande_id')
            ->references('id')
            ->on('typesdemande');

            $table->integer('document_id')->unsigned();
            $table->foreign('document_id')
            ->references('id')
            ->on('documents');

            $table->integer('diplome_id')->unsigned();
            $table->foreign('diplome_id')
            ->references('id')
            ->on('diplomes');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
            ->references('id')
            ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandes');
    }
}
