<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'code'                  =>'required|string|max:255',
            'name'                  =>'required|string|max:255',
            'parent_id'             => 'nullable|string',
            'company_id'            => 'required|exists:companies,id',
        ];
    }

    public function message(){
        return [
            'code.required'         =>'The code field is required.',
            'name.required'         =>'The name field is required.',
            'company_id.exists'     => 'The selected company is invalid.'
        ];
    }
}