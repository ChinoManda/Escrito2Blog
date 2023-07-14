<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{

    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->id("id_rating");
            $table->integer("rate");

            $table->unsignedBigInteger("post")->nullable();
            $table->foreign("post")->references("id_post")->on("post");
            $table->unsignedBigInteger("author")->nullable();
            $table->foreign("author")->references("id_author")->on("author");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rating');
    }
}
