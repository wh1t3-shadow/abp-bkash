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
        Schema::create('assign_batches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accepted_student_id');
            $table->foreign('accepted_student_id')->references('id')->on('admission_acceptance_lists')->onDelete('cascade');

            $table->unsignedBigInteger('course_batch_id');
            $table->foreign('course_batch_id')->references('id')->on('course_batches')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_batches');
    }
};