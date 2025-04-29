<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePayrollRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'employee_id' => 'required',
            'pay_period' => 'required',
            'days_of_present' => 'required',
            'days_of_absent' => 'required',
            'hours_late' => 'required',
            'mandatory_deductions' => 'required',
            'tax' => 'required',
            'salary' => 'required',
            'over_time' => 'required',
            'bonus' => 'required',
            'advance_payments' => 'required',
            'net_pay' => 'required',
            'status' => 'required',
        ];
    }
}
