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
        Schema::create('course_batches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_name_id');
            $table->foreign('course_name_id')->references('id')->on('course_infos')->onDelete('cascade');
            $table->string('course_batch');
            $table->string('course_avail_seat');
            $table->string('course_num_class');
            $table->string('course_fee');
            $table->string('course_batch_start');
            $table->string('course_batch_end');
            $table->string('course_last_date_regist');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_batches');
    }
};