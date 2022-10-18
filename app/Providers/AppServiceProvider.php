<?php

namespace App\Providers;

use Braintree\Gateway;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //Singleton per creare una sola istanza
        $this->app->singleton(Gateway::class, function ($app) {
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'bhbntb535qfyp2wx',
                    'publicKey' => 'wy9t3wygtv54d3nj',
                    'privateKey' => 'd5d65e0e3bcbab9525837c038944d092'
                ]
            );
        });
    }
}
