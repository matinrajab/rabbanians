<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OpenVolunteerRequest extends FormRequest
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
        return [
            'volunteer_type_id' => ['required'],
            'program_name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'description' => ['required', 'string'],
            'requirements' => ['required', 'string'],
            'application_process' => ['required', 'string'],
            'application_deadline' => ['required', 'date'],
            'image' => [$this->isMethod('post') ? 'required' : 'nullable', 'file', 'mimes:png,jpg,jpeg,webp,gif,svg', 'max:2048'],
        ];
    }
}
