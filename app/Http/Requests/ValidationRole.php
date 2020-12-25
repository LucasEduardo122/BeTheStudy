<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRole extends FormRequest
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
            'name' => 'required|unique:roles|min:3'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe um cargo',
            'name.unique' => 'Esse cargo já existe',
            'name.min' => 'Informe um cargo com 3 ou mais caracteres'
        ];
    }
}
