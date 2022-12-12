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
        Schema::create('store_delivery_boy', function (Blueprint $table) {
            $table->integer('dboy_id', true);
            $table->string('boy_name', 255);
            $table->string('boy_phone', 255);
            $table->string('boy_city', 255);
            $table->string('password', 255);
            $table->string('device_id', 255)->nullable();
            $table->string('boy_loc', 255);
            $table->string('lat', 255);
            $table->string('lng', 255);
            $table->integer('status')->default(1);
            $table->integer('store_id');
            $table->string('added_by', 255)->default('store');
            $table->integer('ad_dboy_id')->default(0);
            $table->integer('rem_by_admin')->default(0);
            $table->string('id_no', 255)->nullable();
            $table->string('id_photo', 255)->nullable();
            $table->string('id_name', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_delivery_boy');
    }
};
