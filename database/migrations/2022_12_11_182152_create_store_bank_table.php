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
        Schema::create('store_bank', function (Blueprint $table) {
            $table->integer('ac_id', true);
            $table->integer('store_id');
            $table->string('ac_no', 255);
            $table->string('ifsc', 255);
            $table->string('holder_name', 255);
            $table->string('bank_name', 255);
            $table->string('upi', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_bank');
    }
};
