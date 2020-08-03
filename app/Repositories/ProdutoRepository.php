<?php

namespace App\Repositories;

use App\Repositories\Contracts\ProdutoInterface;
use Illuminate\Support\Facades\Validator;
use App\Exceptions\AppExceptionTrait;
use App\Produto;
use Exception;

class ProdutoRepository implements ProdutoInterface
{
    use AppExceptionTrait;

    private $produto;
    private $validator;

    public function __construct(
        Produto $produto, Validator $validator
    )
    {
        $this->produto = $produto;
        $this->validator = $validator;
    }
    
    public function all()
    {
        try {
            $produto = $this->produto->all();

            return [
                'code' => 200,
                'success' => true,
                'data' => $produto
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function storeOrUpdate($request)
    {
        try {
            $produto = $this->produto->updateOrCreate(
                [
                    'id_produto' => $request->id_produto
                ],
                [
                    'id_cliente' => $request->nm_cliente,
                    'id_produto' => $request->id_produto,
                    'dt_criacao' => $request->dt_criacao,
                    'nm_status_produto' => $request->nm_status_produto
                ]
            );

            return [
                'success' => true,
                'code' => 200,
                'data' => $produto
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function show($id)
    {
        try {
            $produto = $this->produto->findOrFail($id);

            return [
                'success' => true,
                'code' => 200,
                'data' => $produto
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }
    public function destroy($produto)
    {
        try {
            $produto->delete();

            return [
                'success' => true,
                'code' => 200,
                'data' => $produto
            ];
        } catch (Exception $exception) {
            return $this->getException($exception);
        }
    }

    public function validateForm($request)
    {
        return $this->validator::make(
            $request->all(), 
            Produto::rules(), 
            Produto::messages()
        );
    }
}