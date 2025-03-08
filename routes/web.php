<?php

use App\Http\Controllers\ProductController;
use App\Providers\ProductServiceProvider;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Responses;
use App\Services\UserService;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testContainter', function (Request $request){
    $input = $request->input('key');
    return $input;
});

Route::get('/test-provider', function(UserService $userService){
    return $userService -> listUsers();
});

Route::get('/test-users', [UserController::class, 'index']);

Route::get('/test-facade', function (UserService $userService){
    return Response::json($userService -> listUsers());
});

Route::get ('/users', [UserController::class, 'index']) -> middleware('user-middleware');

Route::resource('products', ProductController::class);

Route::get('product-list', function(ProductService $productService){
    $data['products'] = $productService->listProducts();
    return view('products.list', $data);
});