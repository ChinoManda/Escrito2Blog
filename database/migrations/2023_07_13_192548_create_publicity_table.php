<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicityTable extends Migration
{

    public function up()
    {
        Schema::create('publicity', function (Blueprint $table) {
            $table->id("id_publicity");
            $table->string("name");
            $table->string("URL");
            $table->date("expiration_date");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('publicity');
    }
}
