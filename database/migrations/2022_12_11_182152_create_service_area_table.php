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
        Schema::create('service_area', function (Blueprint $table) {
            $table->integer('ser_id', true);
            $table->string('society_name', 255);
            $table->integer('society_id');
            $table->float('delivery_charge', 10, 0)->default(0);
            $table->integer('store_id');
            $table->integer('added_by')->default(0);
            $table->integer('enabled')->default(1);
            $table->integer('city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_area');
    }
};
