<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        $rules = [
            'full_name'      =>'required|string|max:255',
            'gender'         =>'required|string|in:male,female',
            'brithdate'      => 'nullable|string|date_format:Y-m-d|after_or_equal:1900-01-01|before_or_equal:'.now()->format('Y-m-d'),
            'phone_number'   => 'nullable|string|regex:/^\+?\d{0,3}\s?\(?\d{1,3}\)?[-.\s]?\d{3,4}[-.\s]?\d{3,4}$/|max:20',
            'address'        =>'required|string|',
            'user_id'        =>'nullable|string|',
            'company_id'     =>'nullable|string|'

        ];
    
   
        return $rules;
    }
    

    public function messages()
    {
        return [
            'full_name.required'        => 'Hãy nhập họ và tên của bạn.',
            'full_name.string'          => 'Họ và tên phải là một chuỗi.',
            'full_name.max'             => 'Họ và tên không được vượt quá 255 ký tự.',
            'gender.required'           => 'Hãy chọn giới tính.',
            'gender.string'             => 'Giới tính phải là một chuỗi.',
            'gender.in'                 => 'Giới tính phải là "Made" hoặc "FeMade".',
            'brithdate.date_format'     => 'Ngày sinh phải có định dạng YYYY-MM-DD.',
            'brithdate.after_or_equal'  => 'Ngày sinh phải sau hoặc bằng 01/01/1900.',
            'brithdate.before_or_equal' => 'Ngày sinh phải trước hoặc bằng ngày hiện tại.',
            'phone_number.regex'        => 'Số điện thoại không hợp lệ.',
            'phone_number.max'          => 'Số điện thoại không được vượt quá 20 ký tự.',
            'address.required'          => 'Hãy nhập địa chỉ của bạn.',
            'address.string'            => 'Địa chỉ phải là một chuỗi.',
            'user_id.string'            => 'ID người dùng phải là một chuỗi.'
        ];
    }
    
    
}
