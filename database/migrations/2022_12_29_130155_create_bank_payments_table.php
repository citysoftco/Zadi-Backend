<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_payments', function (Blueprint $table) {
            $table->id();
            $table->double("amount");
            $table->text("description")->nullable();
            $table->string("receipt_photo");
            $table->string("payment_status");
            $table->string("payment_for");
            $table->string("cancelled_reason")->nullable();
            $table->unsignedBigInteger("bank_account_id");
            $table->unsignedBigInteger("store_id");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_payments');
    }
}
