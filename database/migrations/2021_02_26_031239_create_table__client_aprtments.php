<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClientAprtments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Client_Aprtments', function (Blueprint $table) {
            $table->id("ClientApartmentID");
            $table->integer("ClientID");
            $table->integer("ApartmentID");
            $table->String("FileUploadMappingNo");
            $table->boolean("Inactive");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Client_Aprtments');
    }
}
