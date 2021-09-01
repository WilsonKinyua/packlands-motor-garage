<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceServiceOfferedByPivotTable extends Migration
{
    public function up()
    {
        Schema::create('service_service_offered_by', function (Blueprint $table) {
            $table->unsignedBigInteger('service_offered_by_id');
            $table->foreign('service_offered_by_id', 'service_offered_by_id_fk_4759781')->references('id')->on('service_offered_bies')->onDelete('cascade');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id', 'service_id_fk_4759781')->references('id')->on('services')->onDelete('cascade');
        });
    }
}
