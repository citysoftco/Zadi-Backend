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
        Schema::create('licensebox', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('license', 255);
            $table->string('client', 255);
            $table->timestamp('installed_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('message', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licensebox');
    }
};
