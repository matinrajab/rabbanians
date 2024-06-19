<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideBannerRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'cta_label' => ['required', 'string', 'max:255'],
            'cta_url' => ['required', 'string', 'max:255'],
            'image' => [$this->isMethod('post') ? 'required' : 'nullable', 'file', 'mimes:png,jpg,jpeg,webp,gif,svg', 'max:2048'],
        ];
    }
}
