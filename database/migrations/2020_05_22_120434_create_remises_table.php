<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remises', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('dateremise')->nullable();
            $table->string('situationremise')->default('en cours')->nullable();
            $table->date('dateretour')->nullable();

            $table->integer('demande_id')->unsigned();

            $table->foreign('demande_id')
            ->references('id')
            ->on('demandes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remises');
    }
}
