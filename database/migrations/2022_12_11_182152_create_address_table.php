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
        Schema::create('address', function (Blueprint $table) {
            $table->integer('address_id', true);
            $table->string('type', 255);
            $table->integer('user_id');
            $table->string('receiver_name', 255);
            $table->string('receiver_phone', 255);
            $table->string('city', 255);
            $table->string('society', 255);
            $table->integer('city_id');
            $table->integer('society_id')->default(1);
            $table->string('house_no', 255);
            $table->string('landmark', 255)->nullable();
            $table->string('state', 255);
            $table->string('pincode', 255);
            $table->string('lat', 255);
            $table->string('lng', 255);
            $table->integer('select_status');
            $table->dateTime('added_at');
            $table->dateTime('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    }
};
