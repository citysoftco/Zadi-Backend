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
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('cat_id', true);
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('url', 255)->nullable();
            $table->string('image', 255);
            $table->integer('parent')->default(0);
            $table->integer('level');
            $table->string('description', 255)->nullable();
            $table->integer('status')->default(1);
            $table->integer('added_by')->default(0);
            $table->integer('tax_type')->default(0);
            $table->string('tax_name', 255)->nullable();
            $table->float('tax_per', 10, 0)->default(0);
            $table->integer('tx_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
