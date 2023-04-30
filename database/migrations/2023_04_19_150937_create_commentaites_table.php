<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaites', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')->on('users')->references('id');
            $table->integer('hebergement_id')->nullable();
            $table->foreign('hebergement_id')->on('hebergements')->references('id');
            $table->string('commentaire');
            $table->date('date');
            $table->integer('cote');
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
        Schema::dropIfExists('commentaites');
    }
}
