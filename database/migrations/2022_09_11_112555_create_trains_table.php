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
            $table->id();
            $table->string("company");
            $table->string("departure_destination");
            $table->string("arrival_destination");
            $table->string("departure_time");
            $table->string("arrival_time");
            $table->tinyInteger("train_code");
            $table->tinyInteger("carriage_number");
            $table->boolean("isTrainOnTime");
            $table->boolean("isTrainCancelled");
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
