<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->integer('secteur_id')->nullable();
            $table->foreign('secteur_id')->references('id')->on('secteurs');
            $table->integer('hebergement_id')->nullable();
            $table->foreign('hebergement_id')->references('id')->on('hebergements');
            $table->string('nom', 50);
            $table->string('img_url')->nullable();
            $table->string('logo_url')->nullable();
            $table->string('site_web')->nullable();
            $table->string('type', 50);
            $table->string('description');
            $table->string('specialite');
            $table->string('adresse', 75);
            $table->string('email', 100);
            $table->string('phone', 10);
            $table->string('code_postal', 6);
            $table->string('personne_ressource', 50);
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
        Schema::dropIfExists('entreprises');
    }
}
