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
        Schema::create('wallet_recharge_history', function (Blueprint $table) {
            $table->integer('wallet_recharge_history', true);
            $table->integer('user_id');
            $table->string('recharge_status', 255);
            $table->float('amount', 10, 0);
            $table->string('payment_gateway', 255);
            $table->date('date_of_recharge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_recharge_history');
    }
};
