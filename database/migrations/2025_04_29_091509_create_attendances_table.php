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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->date('date');
            $table->time('time_in');
            $table->time('time_out');
            $table->string('attendance_status');
            $table->integer('days_present');
            $table->integer('days_absent');
            $table->decimal('late', 4, 2)->nullable();
            $table->decimal('working_hours', 4, 2)->nullable();
            $table->decimal('overtime_hours', 4, 2)->nullable();
            $table->string('approval_status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
