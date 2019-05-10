<?php

namespace App\Http\Requests\StudentRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'id' => 'required|numeric|exists:students',
            'name' => 'required|alpha|between:4,25|unique:students,name,'.$this->id         
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
            'id.required' => 'ID is required!',
            'id.numeric' => 'ID can only be numbers',
            'id.exists' => 'ID doesn\'t exists',        
            'name.required' => 'Name is required',
            'name.alpha' => 'Name should contain letters only',
            'name.between' => 'Name should be between 4 and 25 characters'
        ];
    }
}
