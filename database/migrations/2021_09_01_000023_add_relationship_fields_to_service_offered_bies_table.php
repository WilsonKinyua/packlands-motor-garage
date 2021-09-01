<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToServiceOfferedBiesTable extends Migration
{
    public function up()
    {
        Schema::table('service_offered_bies', function (Blueprint $table) {
            $table->unsignedBigInteger('expert_id');
            $table->foreign('expert_id', 'expert_fk_4759780')->references('id')->on('users');
        });
    }
}
