<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'address' => 'required|string',
        ];
    }

    public function message(){
        return [
            'code.required' => 'Please enter the company code.',
            'name.required' => 'Please enter the company name.',
            'address.required' => 'Please enter the company address.',
        ];
    }
}
