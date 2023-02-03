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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->longText('avatar')->nullable();
            $table->longText('slug');
            $table->longText('seo_url')->nullable();
            $table->longText('seo_content')->nullable();
            $table->longText('seo_robot')->nullable();
            $table->integer('category')->nullable();
            $table->string('price', 255)->default('0');
            $table->string('sale_price', 255)->default('0');
            $table->string('tour_time', 255)->default('');
            $table->integer('travel_by');
            $table->integer('tag')->nullable();
            $table->longText('description')->comment('Tổng quan')->nullable();
            $table->longText('schedule')->comment('Chương trình tour')->nullable();
            $table->integer('calendar_departure')->comment('Lịch khởi hành')->nullable();
            $table->integer('tour_service')->nullable();
            $table->longText('tour_cancellation_rules')->nullable();
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
        Schema::table('tours', function (Blueprint $table) {
            //
        });
    }
};
