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
        $this -> app -> singleton(ProductService::class, function($app){
            $products = [
                [
                    'id' => 1,
                    'name' => 'Tomato',
                    'category' => 'Fruits'
                ],
                [
                    'id' => 2,
                    'name' => 'Carrot',
                    'category' => 'Vegetable'
                ],
                [
                    'id' => 3,
                    'name' => 'Sweet Potato',
                    'category' => 'Vegetable'
                ]
            ];
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
