<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableApartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Apartments', function (Blueprint $table) {
            $table->id("ApartmentID");
            $table->String("ApartmentName");
            $table->integer("TowerID");
            $table->integer("FloorNo");
            $table->Boolean("Inactive")->Default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Apartments');
    }
}
