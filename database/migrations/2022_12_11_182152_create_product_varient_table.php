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
        Schema::create('product_varient', function (Blueprint $table) {
            $table->integer('varient_id', true);
            $table->integer('product_id');
            $table->integer('quantity');
            $table->string('unit', 255);
            $table->float('base_mrp', 10, 0)->nullable();
            $table->float('base_price', 10, 0);
            $table->longText('description');
            $table->string('varient_image', 255);
            $table->string('ean', 255)->nullable();
            $table->integer('approved')->default(1);
            $table->integer('added_by')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_varient');
    }
};
