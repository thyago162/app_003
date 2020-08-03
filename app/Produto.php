<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nm_produto', 'nu_preco'
    ];

    protected static function rules()
    {
        return [];
    }

    protected static function messages()
    {
        return [];
    }
}
