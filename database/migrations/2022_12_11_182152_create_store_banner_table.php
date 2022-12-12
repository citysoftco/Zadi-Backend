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
        Schema::create('store_banner', function (Blueprint $table) {
            $table->integer('banner_id', true);
            $table->string('banner_name', 255);
            $table->string('banner_image', 255)->nullable();
            $table->integer('store_id');
            $table->integer('cat_id');
            $table->string('type', 255)->default('H');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_banner');
    }
};
