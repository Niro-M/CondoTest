<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargeMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charge_master', function (Blueprint $table) {
            $table->id("ChargeID");
            $table->string("ChargeName");
            $table->integer("BillGroupID");
            $table->integer("ProcessTypeID");
            $table->boolean("IsPeriod")->default(false);
            $table->boolean("IsQuater")->default(false);
            $table->boolean("IsYear")->default(false);
            $table->double("UnitRate")->default(false);
            $table->date("ApplicableFrom");
            $table->date("ApplicableTo");
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
        Schema::dropIfExists('charge_master');
    }
}
