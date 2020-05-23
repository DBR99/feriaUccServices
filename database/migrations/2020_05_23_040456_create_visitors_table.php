<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('typeDocument');
            $table->string('numberDocument');
            $table->string('email');
            $table->string('phone');
            $table->bigInteger('idFormationLevel')->unsigned();
            $table->foreign('idFormationLevel')->references('id')->on('formation_levels');
            $table->bigInteger('idProgram')->unsigned();
            $table->foreign('idProgram')->references('id')->on('programs');
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
        Schema::dropIfExists('visitors');
    }
}
