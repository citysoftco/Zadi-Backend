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
        Schema::create('store_orders', function (Blueprint $table) {
            $table->integer('store_order_id', true);
            $table->string('product_name', 255);
            $table->string('varient_image', 255);
            $table->float('quantity', 10, 0);
            $table->string('unit', 255);
            $table->integer('varient_id');
            $table->integer('qty');
            $table->float('price', 10, 0);
            $table->float('total_mrp', 10, 0);
            $table->string('order_cart_id', 255);
            $table->dateTime('order_date');
            $table->integer('store_approval')->default(1);
            $table->integer('store_id');
            $table->longText('description');
            $table->integer('tx_per')->nullable();
            $table->float('price_without_tax', 10, 0)->nullable();
            $table->float('tx_price', 10, 0)->nullable();
            $table->string('tx_name', 255)->nullable();
            $table->string('type', 255)->default('Regular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_orders');
    }
};
