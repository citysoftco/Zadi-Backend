<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('order_id', true);
            $table->integer('user_id')->index('user_id');
            $table->integer('store_id')->index('store_id');
            $table->integer('address_id');
            $table->string('cart_id', 255);
            $table->float('total_price', 10, 0);
            $table->float('price_without_delivery', 10, 0);
            $table->float('total_products_mrp', 10, 0);
            $table->string('payment_method', 255)->nullable();
            $table->float('paid_by_wallet', 10, 0)->default(0);
            $table->float('rem_price', 10, 0)->default(0);
            $table->float('avg_tax_per', 10, 0)->nullable();
            $table->float('total_tax_price', 10, 0)->nullable();
            $table->date('order_date');
            $table->date('delivery_date');
            $table->float('delivery_charge', 10, 0)->default(0);
            $table->string('time_slot', 255);
            $table->integer('dboy_id')->default(0);
            $table->string('order_status', 255)->default('Pending');
            $table->string('user_signature', 255)->nullable();
            $table->string('cancelling_reason', 255)->nullable();
            $table->integer('coupon_id')->default(0);
            $table->float('coupon_discount', 10, 0)->default(0);
            $table->string('payment_status', 255)->nullable();
            $table->integer('cancel_by_store')->default(0);
            $table->integer('dboy_incentive')->nullable();
            $table->dateTime('updated_at')->nullable();

            $table->index([DB::raw("cart_id(191)")], 'cart_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
