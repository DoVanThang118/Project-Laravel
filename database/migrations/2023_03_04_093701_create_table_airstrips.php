<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAirstrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airstrips', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->unsignedBigInteger("landingcity_id");
            $table->unsignedBigInteger("takeofcity_id");
            $table->timestamps();
            $table->foreign("landingcity_id")->references("id")->on("cities");
            $table->foreign("takeofcity_id")->references("id")->on("cities");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airstrips');
    }
}
