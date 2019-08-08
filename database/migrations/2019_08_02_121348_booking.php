<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("booking", function(Blueprint $table){
            $table->increments("id");
            $table->string("user_name");
            $table->string("user_email", 50);
            $table->string("phone");
            $table->date("visit_date");
            $table->text("message");
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
        Schema::dropIfExists("booking");
    }
}
