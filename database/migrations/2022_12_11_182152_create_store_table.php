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
        Schema::create('store', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('store_name', 255);
            $table->string('employee_name', 255);
            $table->string('phone_number', 255);
            $table->string('store_photo', 255)->default('N/A');
            $table->string('city', 255);
            $table->integer('city_id');
            $table->float('admin_share', 10, 0)->default(0);
            $table->string('device_id', 255)->nullable();
            $table->string('email', 255);
            $table->string('password', 255);
            $table->float('del_range', 10, 0);
            $table->string('lat', 255)->nullable();
            $table->string('lng', 255)->nullable();
            $table->string('address', 255);
            $table->integer('admin_approval')->default(1);
            $table->integer('orders')->default(1);
            $table->integer('store_status')->default(1);
            $table->string('store_opening_time', 255);
            $table->string('store_closing_time', 255);
            $table->integer('time_interval');
            $table->longText('inactive_reason')->nullable();
            $table->string('id_type', 255)->nullable();
            $table->string('id_number', 255)->nullable();
            $table->string('id_photo', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store');
    }
};
