<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome', 'email', 'telefone', 'endereco'
    ];

    protected function rules()
    {
        return [
            'nome' => 'required|string|max:3|max:100',
            'email' => 'required|email|max:100',
            'telefone' => 'required|max:11',
            'endereco' => 'required|max:255'
        ];
    }

    protected function messages()
    {
        return [
            'nome.required' => 'O campo NOME é obrigatório',
            'nome.string' => 'Formato inválido para o campo NOME',
            'nome.min' => 'Tamanho mínimo para o campo NOME é de 3 caracteres',
            'nome.max' => 'Tamanho máximo para o campo NOME é de 100 caracteres',
            'email.required' => 'O campo EMAIL é obrigatório',
            'email.email' => 'Formato inválido para o campo EMAIL',
            'email.max' => 'Tamanho máxio para o campo EMAIL é de 100 caracteres',
            'telefone.required' => 'O campo TELEFONE é obrigatório',
            'telefone.max' => 'Tamanho máximo para o campo TELEFONE é de 11 caracteres',
            'endereco.required' => 'O campo ENDERECO é obrigatório',
            'endereco.max' => 'Tamanho máximo para o campo ENDEREÇO é de 255 caracteres'

        ];
    }
}
