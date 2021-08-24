<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTowerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
    public function up()
    {
        Schema::create('Tower', function (Blueprint $table) {
            $table->id("TowerID");
            $table->unsignedBigInteger('ComplexID');
            $table->foreign('ComplexID')->references('ComplexID')->on('Complex');
            $table->String("TowerName",200)->unique();
            $table->integer("NoofFloors");
            $table->integer("NoofAprtments");
            $table->double("SqftPerAprtment",8,2);
            $table->boolean('Inactive')->default(false);
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
        Schema::dropIfExists('Tower');
    }
}
