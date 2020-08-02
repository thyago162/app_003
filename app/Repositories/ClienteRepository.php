<?php

namespace App\Repositories;

use App\Cliente;
use App\Repositories\Contracts\ClienteInterface;
use Illuminate\Database\QueryException;

class ClienteRepository implements ClienteInterface
{
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function all()
    {
        try {
            $cliente = $this->cliente->all();

            return ['cod' => 200, 'cliente' => $cliente];
        } catch (QueryException $qe) {
            return  ['cod_erro' => 500, 'message' => $qe->getMessage()];
        }
    }
    public function storeOrUpdate()
    {
    }
    public function show()
    {
    }
    public function destroy()
    {
    }
}
