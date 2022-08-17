<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_lists', function (Blueprint $table) {
            $table->id();
            $table->string('busnumber');
            $table->string('Photo')->nullable();
            $table->string('Contact');
            $table->string('Company');
            $table->string('Owner');
            
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
        Schema::dropIfExists('bus_lists');
    }
};
