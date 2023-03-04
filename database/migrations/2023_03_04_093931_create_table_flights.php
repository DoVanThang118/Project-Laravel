<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFlights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->dateTime("takeoftime");
            $table->dateTime("landingtime");
            $table->text("description")->nullable();
            $table->unsignedBigInteger("airplane_id");
            $table->unsignedBigInteger("airstrip_id");
            $table->timestamps();
            $table->foreign("airplane_id")->references("id")->on("airplanes");
            $table->foreign("airstrip_id")->references("id")->on("airstrips");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
