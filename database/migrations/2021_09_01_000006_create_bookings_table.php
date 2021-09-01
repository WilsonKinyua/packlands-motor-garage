<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('car_name');
            $table->string('car_type');
            $table->integer('car_year');
            $table->string('car_model')->nullable();
            $table->integer('number_of_wheels');
            $table->longText('extra_services')->nullable();
            $table->datetime('preffered_date_time_of_booking');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('address');
            $table->longText('message')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
