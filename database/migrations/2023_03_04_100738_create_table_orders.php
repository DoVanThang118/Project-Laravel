<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime("order_date");
            $table->unsignedInteger("qty");
            $table->unsignedDecimal("totalmoney",12,3);
            $table->unsignedTinyInteger("status")->default(0);
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("discount_id")->nullable();
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("discount_id")->references("id")->on("discounts");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
