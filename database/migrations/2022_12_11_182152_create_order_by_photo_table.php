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
        Schema::create('order_by_photo', function (Blueprint $table) {
            $table->integer('ord_id', true);
            $table->integer('user_id');
            $table->string('list_photo', 255);
            $table->integer('store_id');
            $table->integer('address_id');
            $table->date('delivery_date');
            $table->integer('processed')->default(0);
            $table->string('reason', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_by_photo');
    }
};
