<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Check if the user is authorized to update the department
        // You can implement your own authorization logic here
        // For example, you might check if the user has a specific role or permission
        // return auth()->user()->can('update-department');
        // For now, we'll just return true to allow all users to update the department
        // In a real application, you should implement proper authorization logic
        // return true;
        // Check if the user is authenticated
        // if (auth()->check()) {
        //     // Check if the user has the 'update-department' permission
        //     return auth()->user()->can('update-department');
        // }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'description' => 'nullable|string|max:255',
            'head' => 'nullable|string|max:255', // Head of the department  
            'status' => 'nullable|string|in:active,inactive', // active, inactive
        ];
    }
}
