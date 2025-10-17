<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LecturerRequest extends FormRequest
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
            // Get lecturer ID if this is an update request
        $id = $this->route('lecturer')?->id ?? $this->route('id');

        // Base rules (same for create and update)
        $rules = [
            'address' => 'required|string|max:255',
            'mobile'  => 'required|digits_between:8,12',
        ];

        // Conditional rule for name field
        if ($this->isMethod('post')) {
            // ✅ Create form
            $rules['name'] = 'required|string|max:100';
        } else {
            // ✅ Update form
            $rules['name'] = 'required|string|max:100' . $id;
        }

        return $rules;
       
    }
}
