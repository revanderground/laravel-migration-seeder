<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("company", 50);
            $table->string("departure_destination", 50);
            $table->string("arrival_destination", 50);
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->unsignedSmallInteger("train_code");
            $table->unsignedTinyInteger("carriage_number");
            $table->boolean("isTrainOnTime")->default(true);
            $table->boolean("isTrainCancelled")->default(false);
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
        Schema::dropIfExists('trains');
    }
}
