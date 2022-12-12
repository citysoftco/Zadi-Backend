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
        Schema::create('list_cart', function (Blueprint $table) {
            $table->integer('l_cid', true);
            $table->integer('l_vid');
            $table->integer('l_qty');
            $table->integer('l_uid');
            $table->integer('ord_by_photo_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_cart');
    }
};
