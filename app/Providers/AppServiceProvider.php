<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Contracts\ClienteInterface', 
            'App\Repositories\ClienteRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\PedidoInterface', 
            'App\Repositories\PedidoRepository'
        );
        $this->app->bind(
            'App\Repositories\Contracts\ProdutoInterface', 
            'App\Repositories\ProdutoRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
