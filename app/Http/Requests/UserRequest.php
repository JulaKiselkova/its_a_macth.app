<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'password'=>'min:5',
            'email'=>'unique:users',
            'picture'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'password.min'=> 'Пароль не может быть менее 5 символов',
            'email.unique'=>'Обязательно нужно заполнить и email должен быть уникальным',
            'picture.required'=>'Хотя бы одно фото обязательно',
        ];
    }
}
