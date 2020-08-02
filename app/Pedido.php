<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function cliente()
    {
        $this->hasOne('App\Cliente');
    }

    protected $fillable = [
        'id_cliente', 'id_produto', 'dt_criacao', 'nm_status_pedido'
    ];
}
