<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->integer('region_id')->nullable();;
            $table->foreign('region_id')->on('regions')->references('id');
            $table->string('type');
            $table->string('nom');
            $table->string('description');
            $table->time('duree');
            $table->float('prix');
            $table->boolean('statut');
            $table->integer('nb_dispo');
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
        Schema::dropIfExists('activites');
    }
}
