<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StoresCityadminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores_cityadmin', function(Blueprint $table){
            $table->increments('id');
            $table->integer('cityadmin_owner');
            $table->integer('store_id');
            $table->enum("is_assigned", ['0', '1'])->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores_cityadmin');
    }
}
