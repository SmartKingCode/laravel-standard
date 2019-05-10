<?php

namespace App\Http\Requests\StudentRequests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha|between:4,25,unique:students'         
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [          
            'name.required' => 'Name is required',
            'name.alpha' => 'Name should contain letters only',
            'name.between' => 'Name should be between 4 and 25 characters',
            'name.unique' => 'Name should be unique'
        ];
    }
}
