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
Route::get('/update-product', [TestController::class, 'updateProduct']);
Route::get('/delete-product', [TestController::class, 'deleteProduct']);


// ANATOMY
// Route::get(...) - registers a new GET route
// '/get-all-products' - the URI for the route
// [TestController::class, 'getAllProducts'] - specifies the controller and method to handle the request

// Route::get('/get-all-products', [TestController::class, 'getAllProducts']);
// Route::get('/get-product-by-id', [TestController::class, 'getProductById']);
// Route::post('/add-product', [TestController::class, 'addNewProduct']);
// Route::put('/update-product', [TestController::class, 'updateProduct']);
// Route::delete('/delete-product', [TestController::class, 'deleteProduct']);
