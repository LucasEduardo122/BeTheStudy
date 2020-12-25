<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users' ,
            'password' => 'required|min:6' ,
            'address' => 'required|min:4' ,
            'city' => 'required|min:4' ,
            'uf' => 'required|min:2' 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o seu nome',
            'name.min' => 'Informe um nome com 3 ou mais caracteres',
            'email.required' => 'Informe um email',
            'email.email' => 'Informe um email válido',
            'email.unique' => 'Já existe um usuário com este email',
            'password.required' => 'Informe uma senha',
            'password.min' => 'Informe uma senha com 6 ou mais caracteres',
            'city.required' =>  'informe sua cidade',
            'city.min' => 'Informe uma cidade com 4 ou mais caracteres',
            'uf.required' => 'Informe o UF da sua cidade',
            'uf.min' => 'informe um UF válido',
            'address.required' => 'Informe um endereço',
            'address.min' => 'Informe um endereço válido'
        ];
    }
}
