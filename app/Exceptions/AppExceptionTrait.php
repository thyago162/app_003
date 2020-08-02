<?php

namespace App\Exceptions;

use Illuminate\Database\QueryException;
use Exception;

trait AppExceptionTrait
{
    public function getException($exception)
    {
        switch(get_class($exception)) {

            case QueryException::class:
                return [
                    'code' => 500,
                    //'message' => 'Falha na comunicação com o banco de dados',
                    'message' => $exception->getMessage(),
                    'success' => false
                ];
            break;
            case Exception::class:
                return [
                    'code' => 500,
                    'message' => 'A aplicação apresentou um erro interno.',
                    'success' => false
                ];
            break;
                
        }
    }
}