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
            //'age'=>'min:18'
        ];
    }

    public function messages()
    {
        return [
            'password.min'=> 'Пароль не может быть менее 5 символов',
            //'age.min'=> 'Тебе должно быть больше 18',
        ];
    }
}
