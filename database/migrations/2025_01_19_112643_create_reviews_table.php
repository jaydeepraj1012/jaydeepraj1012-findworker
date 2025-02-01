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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('rating_id');
            $table->timestamps();
            $table->bigInteger('job_id')->references('job_id')->on('job_listing');
            $table->string('customer_id')->references('user_id')->on('users');
            $table->Integer("rating");
            $table->Integer('worker_id')->references('user_id')->on('users');
            $table->string('review');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
