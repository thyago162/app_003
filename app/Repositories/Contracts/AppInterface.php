<?php

namespace App\Repositories\Contracts;

interface AppInterface
{
    public function all();
    public function storeOrUpdate();
    public function show();
    public function destroy();
}