<?php

use App\Models\BusList;
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
        Schema::create('schedule_list', function (Blueprint $table) {
            $table->id();
            $table->string('bus_id');
            $table->date('date');
            $table->string('from');
            $table->string('to');
            $table->time('time');
            $table->string('duration');
            $table->integer('seat_number');
            $table->string('status')->default('yes');
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
        Schema::dropIfExists('schedule_list');
    }
};
