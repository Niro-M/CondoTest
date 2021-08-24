<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complex', function (Blueprint $table) {
            $table->id('ComplexID');
            $table->unsignedBigInteger('CompanyID');
            $table->foreign('CompanyID')->references('CompanyID')->on('Company');
            $table->string('ComplexName',200)->unique();
            $table->string('Address');
            $table->string('Email',200)->unique();
            $table->string('Phone');
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
        Schema::dropIfExists('complex');
    }
}
