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
        Schema::create('membership_plan', function (Blueprint $table) {
            $table->integer('plan_id', true);
            $table->longText('image')->nullable();
            $table->string('plan_name', 255);
            $table->integer('free_delivery')->default(0);
            $table->integer('reward')->default(0);
            $table->integer('instant_delivery')->default(0);
            $table->longText('plan_description');
            $table->integer('days')->default(0);
            $table->integer('price');
            $table->integer('hide')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_plan');
    }
};
