<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxTable extends Migration
{
    
    public function up()
    {
        Schema::create('tax', function (Blueprint $table) {
            $table->id('TaxID');
            $table->string('TaxTypeName',50)->Unique();
            $table->double('TaxPercentage')->default(false);
            $table->boolean('Inactive')->default(false);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tax');
    }
}
