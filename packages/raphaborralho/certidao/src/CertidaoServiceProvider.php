<?php

namespace raphaborralho\certidoes;
use Illuminate\Support\ServiceProvider;

class CertidaoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/certidao.php' => config_path('certidao.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton(Certidao::class, function () {
            return new Certidao();
        });
    }
}

