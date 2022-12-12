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
        Schema::create('sec_banner', function (Blueprint $table) {
            $table->integer('banner_id', true);
            $table->string('banner_name', 255);
            $table->string('banner_image', 255)->nullable();
            $table->integer('varient_id');
            $table->string('product_name', 255);
            $table->integer('store_id');
            $table->string('qty_unit', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_banner');
    }
};
