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
        Schema::create('tbl_web_setting', function (Blueprint $table) {
            $table->integer('set_id', true);
            $table->string('icon', 255);
            $table->string('name', 255);
            $table->string('favicon', 255);
            $table->integer('number_limit');
            $table->integer('last_loc')->default(0);
            $table->longText('footer_text')->nullable();
            $table->integer('live_chat')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_web_setting');
    }
};
