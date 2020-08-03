<?php

namespace App\Services;

use App\Repositories\PedidoRepository;

class PedidoService
{
    private $repositorio;

    public function __construct( PedidoRepository $repositorio ) {
        $this->repositorio = $repositorio;
    }

    public function index()
    {
        return $this->repositorio->all();
    }

    public function store($request)
    {
        $validator = $this->repositorio->validateForm($request);
        if ($validator->fails()) {
            return [
                'message' => $validator->errors()->toArray(),
                'code' => 403,
                'success' => false
            ];
        }

        return $this->repositorio->storeOrUpdate($request);
    }

    public function show(int $id)
    {
        return $this->repositorio->show($id);
    }

    public function destroy(int $id)
    {
        $pedido = $this->show($id);

        return $this->repositorio->destroy($pedido['data']);

    }
}
