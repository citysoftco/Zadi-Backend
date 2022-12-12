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
        Schema::create('admin_payouts', function (Blueprint $table) {
            $table->integer('payout_id', true);
            $table->string('payout_date', 255);
            $table->string('respond_payout_id', 255);
            $table->string('bill', 255);
            $table->string('store_id', 255);
            $table->float('payout_amt', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_payouts');
    }
};
