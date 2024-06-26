<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->user), 
            ],
            'is_active' => 'required|string|in:active,inactive', 
        ];
    
      
        if (!$this->filled('password')) {
            unset($rules['password']);
        }
        $rules['roles'] = 'nullable|array'; 
        $rules['roles.*'] = 'exists:roles,id'; 
        return $rules;
    }
    

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên người dùng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'is_active.in' => 'Trạng thái không hợp lệ.',
            'roles.array' => 'Vui lòng chọn ít nhất một vai trò.',
            'roles.*.exists' => 'Vai trò đã chọn không tồn tại.',
        ];
    }
    
    
}
