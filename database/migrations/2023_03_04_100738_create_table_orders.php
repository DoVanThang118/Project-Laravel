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
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("discount_id")->nullable();
            $table->timestamps();
            $table->foreign("customer_id")->references("id")->on("customers");
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
