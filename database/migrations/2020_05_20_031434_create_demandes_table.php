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
            $table->bigIncrements('iddemande');
            $table->integer('idtypedemande');
            $table->integer('idtypediplome');
            $table->date('datedemande');
            $table->string('situation');
            $table->integer('iddocument');
            $table->foreign('iddocument')
            ->references('id')
            ->on('document');

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
