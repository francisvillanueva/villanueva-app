<?php

namespace App\Http\Controllers;

use App\Providers\ProductServiceProviders;
use App\Services\ProductService;
use App\Services\TaskService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(protected TaskService $taskService){

    }

    public function index(ProductService $productService){
        $newProduct = [
            'id' => 4,
            'name' => 'Orange',
            'category' => 'Fruit'
        ];

        $productService -> insert($newProduct);
        $this -> taskService->add('Add to Cart');
        $this -> taskService->add('Checkout');

        $data = [
            'product' => $productService->listProducts(),
            'tasks' => $this->taskService->getAllTasks()
        ];

        return view('product.index', $data);
    }

    public function show(ProductService $productService, string $id){
        $product = collect($productService->listProducts()->filter(function($item) use ($id){
            return $item['id'] == $id;
        }))->first();

        return $product;
    }
}
