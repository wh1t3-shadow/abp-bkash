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
        Schema::create('admission_pending_lists', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->unsignedBigInteger('course_title_id');
            $table->foreign('course_title_id')->references('id')->on('course_infos')->onDelete('cascade');
            $table->string('student_email');
            $table->string('student_phone');
            $table->string('student_id');
            $table->string('student_payment_status')->nullable();
            $table->string('student_due_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_pending_lists');
    }
};