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
        Schema::create('store_products', function (Blueprint $table) {
            $table->integer('p_id', true);
            $table->integer('varient_id')->index('varient_id');
            $table->integer('stock');
            $table->integer('store_id')->index('store_id');
            $table->float('mrp', 10, 0);
            $table->float('price', 10, 0);
            $table->integer('min_ord_qty')->default(1);
            $table->integer('max_ord_qty')->default(100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_products');
    }
};
