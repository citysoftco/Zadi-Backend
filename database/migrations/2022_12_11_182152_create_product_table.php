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
        Schema::create('product', function (Blueprint $table) {
            $table->integer('product_id', true);
            $table->integer('cat_id');
            $table->string('product_name', 255);
            $table->string('product_image', 255);
            $table->string('type', 255)->default('Regular');
            $table->integer('hide')->default(0);
            $table->integer('added_by')->default(0);
            $table->integer('approved')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
