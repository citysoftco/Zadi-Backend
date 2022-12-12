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
        Schema::create('store_homecat', function (Blueprint $table) {
            $table->integer('homecat_id')->primary();
            $table->string('homecat_name', 500);
            $table->string('order', 200);
            $table->string('homecat_status', 200);
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
        Schema::dropIfExists('store_homecat');
    }
};
