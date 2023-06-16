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
        Schema::create('services', function (Blueprint $table) {
            $table->id("service_id");
            $table->string('provider_name');
            $table->string('provider_address');
            $table->string('provider_experience');
            $table->string('provider_gender');
            $table->string('provider_email');
            $table->double('provider_number');
            $table->double('provider_service');
            $table->string('provider_photo',300);
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
        Schema::dropIfExists('services');
    }
};
