<?php

namespace App\Repositories;

use App\Produto;
use App\Repositories\Contracts\ProdutoInterface;

class ProdutoRepository implements ProdutoInterface
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }
    
    public function all(){}
    public function storeOrUpdate(){}
    public function show(){}
    public function destroy(){}
}