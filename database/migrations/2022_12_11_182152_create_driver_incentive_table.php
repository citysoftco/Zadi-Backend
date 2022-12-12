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
        Schema::create('driver_incentive', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('dboy_id');
            $table->string('earned_till_now', 255);
            $table->string('paid_till_now', 255);
            $table->string('remaining', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_incentive');
    }
};
