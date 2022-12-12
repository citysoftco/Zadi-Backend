<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapboxCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapbox_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mapbox_country');
            $table->string('country_isocode', 2)->unique();
            $table->enum('is_active', ['0', '1']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapbox_countries');
    }
}
