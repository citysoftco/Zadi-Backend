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
        Schema::create('roles', function (Blueprint $table) {
            $table->integer('role_id', true);
            $table->string('role_name', 255);
            $table->integer('dashboard')->default(0);
            $table->integer('tax')->default(0);
            $table->integer('id')->default(0);
            $table->integer('membership')->default(0);
            $table->integer('reports')->default(0);
            $table->integer('notification')->default(0);
            $table->integer('users')->default(0);
            $table->integer('category')->default(0);
            $table->integer('product')->default(0);
            $table->integer('area')->default(0);
            $table->integer('store')->default(0);
            $table->integer('orders')->default(0);
            $table->integer('payout')->default(0);
            $table->integer('rewards')->default(0);
            $table->integer('delivery_boy')->default(0);
            $table->integer('pages')->default(0);
            $table->integer('feedback')->default(0);
            $table->integer('callback')->default(0);
            $table->integer('settings')->default(0);
            $table->integer('reason')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
};
