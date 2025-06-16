<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return 'hello world';
});

Route::get('/get-all-products', [TestController::class, 'getAllProducts']);
Route::get('/get-product-by-id', [TestController::class, 'getProductById']);
Route::get('/add-product', [TestController::class, 'addNewProduct']);
