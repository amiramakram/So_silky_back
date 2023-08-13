<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string|number',
            'emirate' => 'required|string',
            'zone' => 'required|string',
            'color_White' => 'nullable|number',
            'color_black' => 'nullable|number',
            'color_gray' => 'nullable|number',
            'color_pink' => 'nullable|number',
            'color_beige' => 'nullable|number',
            
        ];
    }
}