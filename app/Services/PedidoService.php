<?php

namespace App\Services;

use App\Repositories\PedidoRepository;

class PedidoService 
{
    private $repositorio;

    public function __construct(PedidoRepository $repositorio)
    {
        $this->repositorio = $repositorio;
    }

}