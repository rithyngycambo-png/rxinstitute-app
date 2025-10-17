<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        $id = $this->route('enrollment')?->id ?? $this->route('id');

        // Base rules for both create and update
        $rules = [
            'studentID' => 'required|exists:students,id',
            'departmentID' => 'required|exists:departments,id',
            'joinDate' => 'required|date',
            'fee' => 'required|numeric|min:0',
        ];

        if ($this->isMethod('post')) {
            // Create (store)
            $rules['enrollNo'] = 'required|string|max:50|unique:enrollments,enrollNo';
        } else {
            // Update
            $rules['enrollNo'] = 'required|string|max:50';
        }

        return $rules;
    }


}
