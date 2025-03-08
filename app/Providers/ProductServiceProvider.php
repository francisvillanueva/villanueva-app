<?php

namespace App\Providers;

use App\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function($app){
            $products = [
                [
                    'id' => 1,
                    'name' => 'Avocado',
                    'category' => 'Fruit'
                ],
                [
                    'id' => 2,
                    'name' => 'Sweet Potato',
                    'category' => 'Vegetable'
                ],
                [
                    'id' => 3,
                    'name' => 'Tomato',
                    'category' => 'Fruit'
                ],
            ];
            return new ProductService($products);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('productKey', 'Goose');
    }
}