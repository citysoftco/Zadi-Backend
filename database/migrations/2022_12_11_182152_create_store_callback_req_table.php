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
        Schema::create('store_callback_req', function (Blueprint $table) {
            $table->integer('callback_req_id', true);
            $table->string('store_name', 255);
            $table->string('store_phone', 255);
            $table->integer('processed')->default(0);
            $table->date('date');
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
        Schema::dropIfExists('store_callback_req');
    }
};
