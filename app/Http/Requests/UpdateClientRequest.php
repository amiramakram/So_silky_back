<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'phone_number' => 'required|string',
            'emirate' => 'required|string',
            'zone' => 'required|string',
            'color_White' => 'nullable|integer|string',
            'color_black' => 'nullable|integer|string',
            'color_gray' => 'nullable|integer|string',
            'color_pink' => 'nullable|integer|string',
            'color_beige' => 'nullable|integer|string',
            'color_darkRed'=> 'nullable|integer|string'
            ,'color_green'=>'nullable|integer|string'
            ,'color_blue'=>'nullable|integer|string'
        ];
    }
}
