<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Information extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("informations",function(Blueprint $table){
            $table->increments("id");
            $table->string("title");
            $table->string("moto");
            $table->text("address");
            $table->string("email");
            $table->string("facebook");
            $table->string("whatsapp");
            $table->string("skype");
            $table->string("viber");
            $table->string("imo");
            $table->string("youtube");
            $table->string("twitter");
            $table->string("linkedin");
            $table->string("gplus");
            $table->string("instagram");
            $table->string("pinterest");
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
        Schema::dropIfExists("informations");
    }
}
