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
        Schema::create('course_meetings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('course_id');
            $table->integer('meeting_number');
            $table->text('description');
            $table->date('meeting_date');
            $table->time('start_time');
            $table->timestamps();

            $table->foreign('course_id')->on('courses')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_meetings');
    }
};
