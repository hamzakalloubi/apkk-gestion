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
            $table->bigIncrements('idretrait');
            $table->date('dateretrait');
            $table->string('situationretrait');
            $table->date('dateretour');
            $table->integer('idtyperetrait');
            $table->foreign('idtyperetrait')
            ->references('id')
            ->on('typeretrait');
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
