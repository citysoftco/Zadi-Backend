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
        Schema::create('twilio', function (Blueprint $table) {
            $table->integer('twilio_id', true);
            $table->string('twilio_sid', 255);
            $table->string('twilio_token', 255);
            $table->string('twilio_phone', 255);
            $table->integer('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('twilio');
    }
};
