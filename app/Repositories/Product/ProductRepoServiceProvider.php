<?php

namespace App\Repositories\Product;

use Illuminate\Support\ServiceProvider;

class ProductRepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Product\ProductInterface', 'App\Repositories\Product\ProductRepository',);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
