<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'role'                  => 'required|string|max:255',
            'description'           => 'nullable|string',
        ];
    }

    public function message(){
        return [
            'role.required'         => 'The role field is required.',
            'role.max'              => 'The role may not be greater than 255 characters.',
        ];
    }
}
