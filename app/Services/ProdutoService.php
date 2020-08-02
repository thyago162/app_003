<?php

namespace App\Services;

use App\Repositories\ProdutoRepository;

class PedidoService 
{
    private $repositorio;

    public function __construct(ProdutoRepository $repositorio)
    {
        $this->repositorio = $repositorio;
    }

}