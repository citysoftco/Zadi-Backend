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
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 255);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255)->nullable();
            $table->rememberToken();
            $table->string('user_phone', 255)->nullable();
            $table->string('device_id', 255)->nullable();
            $table->string('user_image', 255)->nullable()->default('N/A');
            $table->integer('user_city')->nullable();
            $table->integer('user_area')->nullable();
            $table->string('otp_value', 255)->nullable();
            $table->integer('status')->default(1);
            $table->float('wallet', 10, 0)->default(0);
            $table->integer('rewards')->default(0);
            $table->integer('is_verified')->default(0);
            $table->integer('block')->default(2);
            $table->date('reg_date');
            $table->integer('app_update')->default(1);
            $table->string('facebook_id', 255)->nullable();
            $table->string('referral_code', 255)->nullable();
            $table->integer('membership')->default(0);
            $table->date('mem_plan_start')->nullable();
            $table->date('mem_plan_expiry')->nullable();
            $table->timestamps();
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('address', 500)->nullable();
            $table->string('email', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
