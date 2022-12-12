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
        Schema::create('plan_buy_history', function (Blueprint $table) {
            $table->integer('wallet_id', true);
            $table->integer('amount');
            $table->string('type', 255);
            $table->integer('user_id');
            $table->date('created_at');
            $table->string('transaction_id', 255)->nullable();
            $table->integer('before_recharge')->nullable();
            $table->integer('after_recharge')->nullable();
            $table->string('payment_gateway', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_buy_history');
    }
};
