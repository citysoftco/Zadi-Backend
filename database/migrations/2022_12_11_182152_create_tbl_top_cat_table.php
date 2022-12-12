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
        Schema::create('tbl_top_cat', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cat_id');
            $table->integer('cat_rank');
            $table->string('created_at', 255);
            $table->string('updated_at', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_top_cat');
    }
};
