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
        Schema::create('wishlist', function (Blueprint $table) {
            $table->integer('wish_id', true);
            $table->integer('user_id');
            $table->integer('varient_id');
            $table->string('quantity', 255);
            $table->string('unit', 255);
            $table->string('price', 255);
            $table->string('mrp', 255);
            $table->string('product_name', 255);
            $table->longText('description');
            $table->string('varient_image', 255);
            $table->integer('store_id');
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlist');
    }
};
