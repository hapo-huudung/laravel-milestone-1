<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
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
            'email'=>'unique:users||required||email',
            'name'=>'required|regex: /^[\p{L}\s\'.-]+$/',
            'birthday'=>'required|date|before:now',
            'password'=>'required|min:6',
            'address'=>'required|max:255',
            'gender'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name field is required',
            'email.required' => 'The Email field is required',
            'birthday.required' => 'The Birthday field is required',
            'address.required' => 'The Address field is required',
            'password.required' => 'The Password field is required',
            'gender.required' => 'The Gender field is required',


        ];
    }
}
