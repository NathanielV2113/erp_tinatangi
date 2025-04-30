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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('pay_period');
            $table->integer('days_of_present');
            $table->integer('days_of_absent');
            $table->decimal('hours_late', 4, 2);
            $table->double('mandatory_deductions');
            $table->double('tax');
            $table->double('over_time');
            $table->double('bonus');
            $table->double('advance_payments');
            $table->double('gross_deduction');
            $table->double('gross_salary');
            $table->double('net_pay');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
