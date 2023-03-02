<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'name' => ['required', 'min:3', 'max:100'],
            'descricao' => ['required', 'min:15', 'max:255'],
            'quantidade' => ['required'],
            'image' => 'image',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => "Esse campo é Obrigatorio",
            'descricao.required' => "Esse campo é Obrigatorio",
            'quantidade.required' => "Quantidade deve ser um numero inteiro natural. Esse campo é Obrigatorio",
            'image.required' => "Esse campo é Obrigatorio",
        ];
    }
}
