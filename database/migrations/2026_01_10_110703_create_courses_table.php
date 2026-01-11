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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->unsignedBigInteger('coach_id');
            $table->text('description');
            $table->boolean('is_active')->default(false);
            $table->integer('total_meetings');
            $table->integer('meeting_duration');
            $table->text('schedule_day');
            $table->date('end_date')->nullable(true);
            $table->timestamps();

            $table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
