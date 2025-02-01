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
        Schema::create('worker_profile', function (Blueprint $table) {
            $table->id('profile_id');
            $table->Integer('user_id');
            $table->foreignId('worker_id')->references('user_id')->on('users');
            $table->string('skills');
            $table->string('hourly_rate');
            $table->string('portfolio_link');
            $table->string('bio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('worker_profile');
    }
};
