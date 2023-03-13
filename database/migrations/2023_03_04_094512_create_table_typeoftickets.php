<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTypeoftickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeoftickets', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedInteger("totalticket");
            $table->unsignedInteger("ticketinstock");
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->unsignedDecimal("price",12,3);
            $table->unsignedBigInteger("flight_id");
            $table->unsignedBigInteger("typeofseat_id");
            $table->timestamps();
            $table->foreign("flight_id")->references("id")->on("flights");
            $table->foreign("typeofseat_id")->references("id")->on("typeofseats");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typeoftickets');
    }
}
