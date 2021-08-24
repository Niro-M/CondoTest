<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAprtmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Apartments', function (Blueprint $table) {
             $table->double('SqFeet')->after('FloorNo');
             $table->double('ShareValue')->after('SqFeet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Apartments', function (Blueprint $table) {
            //
        });
    }
}
