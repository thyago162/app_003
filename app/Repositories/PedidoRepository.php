<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoInterface;
use App\Pedido;

class PedidoRepository implements PedidoInterface
{
    private $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }
    
    public function all(){}
    public function storeOrUpdate(){}
    public function show(){}
    public function destroy(){}
}