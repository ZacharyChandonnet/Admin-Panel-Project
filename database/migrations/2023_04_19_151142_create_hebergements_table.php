<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hebergements', function (Blueprint $table) {
            $table->id();
            $table->integer('region_id')->nullable();
            $table->foreign('region_id')->on('regions')->references('id');
            $table->string('nom');
            $table->string('type');
            $table->string('description');
            $table->integer('etoile');
            $table->float('prix');
            $table->boolean('statut');
            $table->integer('nb_dispo');
            $table->string('adresse');
            $table->string('phone');
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
        Schema::dropIfExists('hebergements');
    }
}
