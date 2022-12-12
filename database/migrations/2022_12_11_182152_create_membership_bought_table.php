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
        Schema::create('membership_bought', function (Blueprint $table) {
            $table->integer('buy_id', true);
            $table->integer('user_id');
            $table->integer('mem_id');
            $table->date('mem_start_date');
            $table->date('mem_end_date');
            $table->string('price', 255);
            $table->date('buy_date');
            $table->string('paid_by', 255)->nullable();
            $table->string('transaction_id', 255)->nullable();
            $table->string('payment_gateway', 255)->nullable();
            $table->string('payment_status', 255)->default('success');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_bought');
    }
};
