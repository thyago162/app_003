<?php

namespace App\Services;

use App\Repositories\ClienteRepository;

class ClienteService 
{
    private $repositorio;

    public function __construct(ClienteRepository $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function index()
    {
        return $this->repositorio->all();
    }

}