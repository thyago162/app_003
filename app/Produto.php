<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome', 'preco'
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
