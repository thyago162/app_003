<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nm_produto', 'nu_preco'
    ];

    protected function rules()
    {
        return [];
    }

    protected function messages()
    {
        return [];
    }
}
