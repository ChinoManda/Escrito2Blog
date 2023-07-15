<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostChangeTable extends Migration
{

    public function up()
    {
        Schema::create('post_change', function (Blueprint $table) {
            $table->id("id_change");
            $table->string("title");
            $table->string("body");
            $table->boolean("publicity"); 

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('post_change');
    }
}
