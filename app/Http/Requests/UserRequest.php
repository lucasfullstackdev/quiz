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
            'name' => 'required|max:255',
            'email' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do usuário é obrigatório',
            'name.max' => 'O limite máximo é de 255 caracteres',
            'email.max' => 'O limite máximo para e-mail é de 255 caracteres',
            'email.min' => 'sd',
            'email.required' => 'O e-mail é obrigatório'
        ];
    }

}
