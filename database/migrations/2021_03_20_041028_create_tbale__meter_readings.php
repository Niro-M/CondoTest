<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbaleMeterReadings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('MeterReadings', function (Blueprint $table) {
            $table->id("MeterReadingID");
            $table->integer("ClientID");
            $table->integer("ApartmentID");
            $table->Date("ReadingDate");
            $table->integer("ChargeID");
            $table->double("StartMeter")->default(0);
            $table->double("EndMeter")->default(0);
            $table->double("Consumption")->default(0);
            $table->Boolean("Process")->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MeterReadings');
    }
}
