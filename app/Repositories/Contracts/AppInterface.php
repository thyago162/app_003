<?php

namespace App\Repositories\Contracts;

interface AppInterface
{
    public function all();
    public function storeOrUpdate($request);
    public function show($id);
    public function destroy($id);
    public function validateForm($request);
}