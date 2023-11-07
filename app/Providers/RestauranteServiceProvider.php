<?php

namespace App\Providers;

use App\Models\Restaurante;
use Illuminate\Support\ServiceProvider;

class RestauranteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $infoRestaurante = Restaurante::first(); // Obtén la información del restaurante

    view()->share('infoRestaurante', $infoRestaurante);
    }
}
