<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTypeofseats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeofseats', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("totalseat");
            $table->text("description")->nullable();
            $table->unsignedBigInteger("airplane_id");
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
        Schema::dropIfExists('typeofseats');
    }
}
