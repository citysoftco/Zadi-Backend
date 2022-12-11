<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityadminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cityadmin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city_id');
            $table->string('cityadmin_name');
            $table->string('cityadmin_image');
            $table->string('cityadmin_phone');
            $table->string('email');
            $table->string('password');
            $table->enum('status', ['0', '1', '2'])->default('1');
            $table->string('cityadmin_address');
            $table->string('lat');
            $table->string('lng');
            $table->string('device_id');
            $table->string('id_type');
            $table->string('id_no');
            $table->string('id_photo');
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
        Schema::dropIfExists('cityadmin');
    }
}
