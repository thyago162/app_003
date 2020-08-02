<?php

namespace App\Repositories;

use App\Repositories\Contracts\ClienteInterface;
use App\Exceptions\AppExceptionTrait;
use Illuminate\Support\Facades\Validator;
use App\Cliente;
use Exception;

class ClienteRepository implements ClienteInterface
{
    use AppExceptionTrait;

    private $cliente;
    private $validator;

    public function __construct(
        Cliente $cliente,
        Validator $validator
    ) {
        $this->cliente = $cliente;
        $this->validator = $validator;
    }

    public function all()
    {
        try {
            $cliente = $this->cliente->all();

            return [
                'code' => 200,
                'success' => true,
                'data' => $cliente
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function storeOrUpdate($request)
    {
        try {
            $cliente = $this->cliente->updateOrCreate(
                [
                    'id_cliente' => $request->id_cliente
                ],
                [
                    'nm_cliente' => $request->nm_cliente,
                    'nm_email' => $request->nm_email,
                    'nm_telefone' => $request->nm_telefone,
                    'nm_endereco' => $request->nm_endereco
                ]
            );

            return [
                'success' => true,
                'code' => 200,
                'data' => $cliente
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function show($id)
    {
        try {
            $cliente = $this->cliente->findOrFail($id);

            return [
                'success' => true,
                'code' => 200,
                'data' => $cliente
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function destroy($cliente)
    {
        try {
            $cliente->delete();

            return [
                'success' => true,
                'code' => 200,
                'data' => $cliente
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }

    public function validateForm($request)
    {
        return $this->validator::make($request->all(), Cliente::rules(), Cliente::messages());
    }
}
