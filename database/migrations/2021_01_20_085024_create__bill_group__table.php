<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BillGroups', function (Blueprint $table) {
            $table->id("BillGroupID");
            $table->string("BillGroupName",250)->unique();
            $table->string("BillGroupDisplayName");
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
        Schema::dropIfExists('BillGroups');
    }
}
