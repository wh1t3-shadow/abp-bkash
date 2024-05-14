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
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->unsignedBigInteger('course_category_id');
            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade');
            $table->text('course_image');
            $table->text('course_document');
            $table->string('course_duration');
            $table->text('course_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_infos');
    }
};
