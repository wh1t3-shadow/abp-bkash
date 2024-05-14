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
        Schema::create('admission_acceptance_lists', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_id');
            $table->unsignedBigInteger('student_enroll_course_id');
            $table->foreign('student_enroll_course_id')->references('id')->on('course_infos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_acceptance_lists');
    }
};