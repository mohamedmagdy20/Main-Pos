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
        Schema::create('gums', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('small')->nullable();
            $table->string('large')->nullable();
            $table->string('x-large')->nullable();
            $table->string('xx-large')->nullable();
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
        Schema::dropIfExists('gums');
    }
};
