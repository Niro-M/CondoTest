<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company', function (Blueprint $table) {
            $table->id('CompanyID');
            $table->string('CompanyName',200)->unique();
            $table->string('Address');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Fax');
            $table->string('VatNo');
            $table->string('SvatNo');
            $table->string('BankName');
            $table->string('BankCode');
            $table->string('BranchName');
            $table->string('BranchCode');
            $table->string('CompanyAccNo');
            $table->string('LogoImagePath');
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
        Schema::dropIfExists('Company');
    }
}
