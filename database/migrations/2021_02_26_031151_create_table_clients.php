<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clients', function (Blueprint $table) {
            $table->id("ClientID");
            $table->string("ClientName");
            $table->string("BillingName");
            $table->boolean("IsTanent")->default(false);
            $table->string("Phone");
            $table->string("Fax");
            $table->string("Email");
            $table->string("WebLoginUserName");
            $table->string("WebLoginPassword");
            $table->string("ImagePath");
            $table->date("BillStartingFrom");
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
        Schema::dropIfExists('table_clients');
    }
}
