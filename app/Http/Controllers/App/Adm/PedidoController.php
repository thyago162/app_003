<?php

namespace App\Http\Controllers\App\Adm;

use App\Http\Controllers\Controller;
use App\Services\PedidoService;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    private $service;

    public function __construct(PedidoService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = $this->service->index();
        return response()->json(compact('resultado'),$resultado['code']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultado = $this->service->store($request);
        return response()->json(compact('resultado'),$resultado['code']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resultado = $this->service->show($id);
        return response()->json(compact('resultado'),$resultado['code']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resultado = $this->service->destroy($id);
        return response()->json(compact('resultado'),$resultado['code']);
    }
}
