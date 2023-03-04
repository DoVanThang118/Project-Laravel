<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address")->nullable();
            $table->string("email");
            $table->string("national")->nullable();
            $table->date("birthday");
            $table->string("CCCD");
            $table->string("tel");
            $table->string("image")->nullable();
            $table->string("sex");
            $table->unsignedBigInteger("typeofcustomer_id");
            $table->timestamps();
            $table->foreign("typeofcustomer_id")->references("id")->on("typeofcustomers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
