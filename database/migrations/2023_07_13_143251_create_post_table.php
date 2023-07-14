<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{

    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id("id_post");
            $table->string("title");
            $table->string("body");
            $table->boolean("publicity"); 

            $table->unsignedBigInteger("author")->nullable();
            $table->foreign("author")->references("id_author")->on("author");

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post');
    }
}
