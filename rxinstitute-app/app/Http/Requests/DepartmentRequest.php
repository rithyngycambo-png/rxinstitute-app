<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest{
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
         // Get department ID if this is an update request
    $id = $this->route('department')?->id ?? $this->route('id');

    // Define rules based on request method
    $rules = [
        'syllabus' => 'required|string|max:255',
        'duration' => 'required|string|max:50',
    ];

    // Conditional validation for name field
    if ($this->isMethod('post')) {
        // Create form → require unique name
        $rules['name'] = 'required|string|max:100|unique:departments,name';
    } else {
        // Update form → allow same name for current record
        $rules['name'] = 'required|string|max:100' . $id;
    }

    return $rules;
}
}