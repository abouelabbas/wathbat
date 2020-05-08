<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWathbatClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wathbat_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('en_name', 1000)->nullable();
            $table->string('ar_name', 1000)->nullable();
            $table->string('logo', 1000)->nullable();
            $table->string('url', 1000)->nullable();
            $table->integer('active')->nullable();
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
        Schema::dropIfExists('wathbat_clients');
    }
}
