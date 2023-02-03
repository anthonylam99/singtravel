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
        Schema::create('calendar_departure', function (Blueprint $table) {
            $table->id();
            $table->date('start');
            $table->date('end');
            $table->longText('description')->nullable();
            $table->integer('seats')->default(0);
            $table->integer('remain_seats')->default(0);
            $table->string('adult_price')->default('0');
            $table->string('child_price')->default('0');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendar_departure', function (Blueprint $table) {
            //
        });
    }
};
