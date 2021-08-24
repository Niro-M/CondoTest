<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableApartmentCharges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Apartment_charges', function (Blueprint $table) {
                    $table->id("ApartmentChargeID");
                    $table->integer("ApartmentID");
                    $table->integer("ChargeID");
                    $table->boolean("Inactive")->default(false);
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Apartment_charges');
    }
}
