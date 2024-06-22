<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'code' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ];
    }

    public function message(){
        return [
            'code.required'=>'Please enter the country code.',
            'name.required' => 'Please enter the country name.',
        ];
    }
}
