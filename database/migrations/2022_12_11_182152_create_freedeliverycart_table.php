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
        Schema::create('freedeliverycart', function (Blueprint $table) {
            $table->integer('id', true);
            $table->float('min_cart_value', 10, 0)->default(0);
            $table->float('del_charge', 10, 0)->default(0);
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
        Schema::dropIfExists('freedeliverycart');
    }
};
