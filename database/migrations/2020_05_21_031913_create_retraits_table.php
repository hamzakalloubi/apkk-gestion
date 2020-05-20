<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRetraitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retraits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dateretrait');
            $table->string('situationretrait');
            $table->date('dateretour');
            $table->integer('typeretrait_id')->unsigned();

        });

        Schema::table('retraits', function($table) {
            $table->foreign('typeretrait_id')
            ->references('id')
            ->on('typeretraits');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('retraits');
    }
}
