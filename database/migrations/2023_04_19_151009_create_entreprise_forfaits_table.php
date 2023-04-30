<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseForfaitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprise_forfaits', function (Blueprint $table) {
            $table->id();
            $table->integer('forfait_id');
            $table->foreign('forfait_id')->on('forfaits')->references('id');
            $table->integer('entreprise_id');
            $table->foreign('entreprise_id')->on('entreprise')->references('id');
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
        Schema::dropIfExists('entreprise_forfaits');
    }
}
