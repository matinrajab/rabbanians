<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'location' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'guide_book_link' => ['required', 'string', 'max:255'],
            'fully_funded_link' => ['required', 'string', 'max:255'],
            'partial_funded_link' => ['required', 'string', 'max:255'],
            'self_funded_link' => ['required', 'string', 'max:255'],
            'image' => [$this->isMethod('post') ? 'required' : 'nullable', 'file', 'mimes:png,jpg,jpeg,webp,gif,svg', 'max:2048'],
        ];
    }
}
