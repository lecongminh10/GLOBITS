<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
   
    public function rules(): array
    {
        $rules = [
            'code'                   => 'required|string|max:255',
            'name'                   => 'required|string|max:255',
            'description'            => 'required|string',
            'company_id'             => 'required|exists:companies,id',
            'persons'                => 'required|array',
            'persons.*'              => 'exists:persons,id',

        ];
    
   
        return $rules;
    }
    

    public function messages()
    {
        return [
            'code.required'          => 'The code field is required.',
            'name.required'          => 'The name field is required.',
            'description.required'   => 'The description field is required.',
            'company_id.required'    => 'Please select a company.',
            'company_id.exists'      => 'The selected company does not exist.',
            'persons.required'       => 'Please select at least one person.',
            'persons.*.exists'       => 'One or more selected persons do not exist in the database.',
        ];
    }
}