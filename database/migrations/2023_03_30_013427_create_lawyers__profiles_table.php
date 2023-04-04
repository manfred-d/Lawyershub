<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lawyers_profile', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('email',255);
            $table->string('practice_area',1000);
            $table->string('location',255);
            $table->string('phone',25);
            $table->string('license',255);
            $table->string('license_year',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers_profile');
    }
};
