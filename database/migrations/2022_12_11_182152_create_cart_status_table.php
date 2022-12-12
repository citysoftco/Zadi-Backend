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
        Schema::create('cart_status', function (Blueprint $table) {
            $table->integer('status_id', true);
            $table->dateTime('pending')->nullable();
            $table->dateTime('confirm')->nullable();
            $table->dateTime('out_for_delivery')->nullable();
            $table->dateTime('completed')->nullable();
            $table->dateTime('cancelled')->nullable();
            $table->string('cart_id', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_status');
    }
};
