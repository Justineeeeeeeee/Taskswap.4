<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsConditionsTable extends Migration
{
    public function up()
    {
        Schema::create('terms_conditions', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->timestamps(); //'created_at' at 'updated_at' fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('terms_conditions');
    }
}

