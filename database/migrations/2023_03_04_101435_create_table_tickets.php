<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger("status")->default(0);
            $table->unsignedDecimal("price",12,3);
            $table->unsignedBigInteger("typeofticket_id");
            $table->unsignedBigInteger("order_id")->nullable();
            $table->unsignedBigInteger("seat_id")->nullable();
            $table->timestamps();
            $table->foreign("typeofticket_id")->references("id")->on("typeoftickets");
            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("seat_id")->references("id")->on("seats");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
