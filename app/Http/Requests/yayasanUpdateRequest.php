<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class yayasanUpdateRequest extends FormRequest
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
            'logo_yayasan'           => 'image|mimes:jpeg,jpg,png|max:1500',
            'nama'           => 'required',
        ];
    }
}
