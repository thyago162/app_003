<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;
    protected $fillable = [
        'nm_cliente', 'nm_email', 'nm_telefone', 'nm_endereco'
    ];

    public function pedido()
    {
        $this->hasMany('App\Pedido');
    }

    protected static function rules()
    {
        return [
            'nm_cliente' => 'required|string|min:3|max:100',
            'nm_email' => 'required|email|max:100',
            'nm_telefone' => 'required|max:11',
            'nm_endereco' => 'required|max:255'
        ];
    }

    protected static function messages()
    {
        return [
            'nm_cliente.required' => 'O campo NOME é obrigatório',
            'nm_cliente.string' => 'Formato inválido para o campo NOME',
            'nm_cliente.min' => 'Tamanho mínimo para o campo NOME é de 3 caracteres',
            'nm_cliente.max' => 'Tamanho máximo para o campo NOME é de 100 caracteres',
            'nm_email.required' => 'O campo EMAIL é obrigatório',
            'nm_email.email' => 'Formato inválido para o campo EMAIL',
            'nm_email.max' => 'Tamanho máxio para o campo EMAIL é de 100 caracteres',
            'nm_telefone.required' => 'O campo TELEFONE é obrigatório',
            'nm_telefone.max' => 'Tamanho máximo para o campo TELEFONE é de 11 caracteres',
            'nm_endereco.required' => 'O campo ENDERECO é obrigatório',
            'nm_endereco.max' => 'Tamanho máximo para o campo ENDEREÇO é de 255 caracteres'

        ];
    }
}
