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
        Schema::create('callback_req', function (Blueprint $table) {
            $table->integer('callback_req_id', true);
            $table->integer('user_id');
            $table->string('user_name', 255);
            $table->string('user_phone', 255);
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
        Schema::dropIfExists('callback_req');
    }
};
