<?php

namespace App\Repositories;

use App\Repositories\Contracts\PedidoInterface;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\AppExceptionTrait;
use App\Pedido;
use Exception;

class PedidoRepository implements PedidoInterface
{
    use AppExceptionTrait;

    private $pedido;
    private $validator;

    public function __construct(
        Pedido $pedido, Validator $validator
    )
    {
        $this->pedido = $pedido;
        $this->validator = $validator;
    }
    
    public function all()
    {
        try {
            $pedido = $this->pedido->all();

            return [
                'code' => 200,
                'success' => true,
                'data' => $pedido
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function storeOrUpdate($request)
    {
        try {
            $pedido = $this->pedido->updateOrCreate(
                [
                    'id_pedido' => $request->id_pedido
                ],
                [
                    'id_cliente' => $request->nm_cliente,
                    'id_produto' => $request->id_produto,
                    'dt_criacao' => $request->dt_criacao,
                    'nm_status_pedido' => $request->nm_status_pedido
                ]
            );

            return [
                'success' => true,
                'code' => 200,
                'data' => $pedido
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function show($id)
    {
        try {
            $pedido = $this->pedido->findOrFail($id);

            return [
                'success' => true,
                'code' => 200,
                'data' => $pedido
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function destroy($pedido)
    {
        try {
            $pedido->delete();

            return [
                'success' => true,
                'code' => 200,
                'data' => $pedido
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }

    public function validateForm($request)
    {
        return $this->validator::make(
            $request->all(), 
            Pedido::rules(), 
            Pedido::messages()
        );
    }
}