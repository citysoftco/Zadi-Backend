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
        Schema::create('store_notification', function (Blueprint $table) {
            $table->integer('not_id', true);
            $table->string('not_title', 255);
            $table->string('image', 255)->nullable();
            $table->longText('not_message');
            $table->integer('store_id');
            $table->integer('read_by_store')->default(0);
            $table->dateTime('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_notification');
    }
};
