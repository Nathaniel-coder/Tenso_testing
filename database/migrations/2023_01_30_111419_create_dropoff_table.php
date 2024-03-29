<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDropOffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropoffs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('name');
            $table->string('phone');
            $table->string('country');
            $table->string('branch');
            $table->string('tocountry');
            $table->string('toprovince');
            $table->string('toname');
            $table->string('tophone');
            $table->string('toaddress1');
            $table->string('toaddress2');
            $table->string('topostcode');
            $table->string('tocity');
            $table->string('weight')->nullable();
            $table->string('driverId')->nullable();
            $table->string('vehicleId')->nullable();
            $table->string('status')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('dropoffs');
    }
}
