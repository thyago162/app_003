<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'id_cliente', 'id_produto', 'data_criacao', 'status_pedido'
    ];
}
