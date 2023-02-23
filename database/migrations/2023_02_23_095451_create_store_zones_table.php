<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_zones', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->polygon('coordinates')->nullable();
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger("store_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_zones');
    }
}
