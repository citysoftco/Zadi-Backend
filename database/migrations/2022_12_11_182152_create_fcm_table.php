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
        Schema::create('fcm', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('sender_id', 255);
            $table->longText('server_key');
            $table->longText('store_server_key');
            $table->longText('driver_server_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fcm');
    }
};
