<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class TaskRequest extends FormRequest
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
            'project_id'                 => 'required|exists:projects,id',
            'person_id'                  => 'required|exists:persons,id',
            'start_time'                 => 'required|date',
            'end_time'                   => 'required|date|after:start_time',
            'priority'                   => 'required|in:1,2,3',
            'name'                       => 'required|string',
            'description'                => 'required|string',
            'status'                     => 'required|in:1,2,3,4',
            // 'file'                       => 'required|max:2048',
        ];
    }

    public function messages(){
        return [
            'project_id.required'        => 'The project ID field is required.',
            'project_id.exists'          => 'The selected project is invalid.',
            'person_id.required'         => 'The person ID field is required.',
            'person_id.exists'           => 'The selected person is invalid.',
            'start_time.required'        => 'The start time field is required.',
            'start_time.date'            => 'The start time must be a valid date.',
            'end_time.required'          => 'The end time field is required.',
            'end_time.date'              => 'The end time must be a valid date.',
            'end_time.after'             => 'The end time must be after the start time.',
            'priority.required'          => 'The priority field is required.',
            'priority.in'                => 'The selected priority is invalid.',
            'name.required'              => 'The name field is required.',
            'description.required'       => 'The description field is required.',
            'status.required'            => 'The status field is required.',
            'status.in'                  => 'The selected status is invalid.',
        ];
    }

//     public function failedValidation(Validator $validator)
//     {
//         throw new HttpResponseException(response()->json([
//             'success'   => false,
//             'message'   => 'Validation errors',
//             'data'      => $validator->errors()
//        ]));
//    }
}
