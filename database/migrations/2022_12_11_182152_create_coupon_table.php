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
        Schema::create('coupon', function (Blueprint $table) {
            $table->integer('coupon_id', true);
            $table->string('coupon_name', 255);
            $table->string('coupon_image', 255);
            $table->string('coupon_code', 255);
            $table->string('coupon_description', 255);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('cart_value');
            $table->integer('amount');
            $table->string('type', 255);
            $table->integer('uses_restriction')->default(1);
            $table->integer('store_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon');
    }
};
