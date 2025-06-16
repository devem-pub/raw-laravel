<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getAllProducts()
    {
        // // QUERY BUILDER BASED (FLUENT SYNTAX)
        // $getProducts = DB::table('products')
        //     ->get();

        // // QUERY BUILDER BASED (RAW SQL)
        // $getProducts = DB::select('SELECT * FROM products');

        // // ELOQUENT MODEL BASED
        // $getProducts = Products::all();

        // return $getProducts;
    }

    public function getProductById()
    {
        // // QUERY BUILDER BASED (FLUENT SYNTAX)
        // $getProduct = DB::table('products')
        //     ->where('id', 1)
        //     ->first();

        // // QUERY BUILDER BASED (RAW SQL)
        // $getProduct = DB::select('SELECT * FROM products WHERE id = ?', [2]);

        // // ELOQUENT MODEL BASED
        // $getProduct = Products::find(1);
        // $getProduct = Products::where('product', 'TOYO')->first();

        // return $getProduct;
    }

    public function addNewProduct()
    {
        // QUERY BUILDER BASED (FLUENT SYNTAX)
        $product = DB::table('products')->insert([
            'product' => 'ASIN',
            'qty' => 20
        ]);

        // QUERY BUILDER BASED (RAW SQL)
        // $product = DB::insert('INSERT INTO products (product, qty) VALUES (?, ?)', [
        //     'PATIS',
        //     20
        // ]);

        // ELOQUENT MODEL BASED
        // $product = Products::create([
        //     'product' => 'GATA',
        //     'qty' => 10
        // ]);

        return $product;
    }

    public function updateProduct()
    {
        // QUERY BUILDER BASED (FLUENT SYNTAX)
        // $product = DB::table('products')
        //     ->where('product', 'ASIN')
        //     ->update(['qty' => 250]);

        // QUERY BUILDER BASED (RAW SQL)
        // $product = DB::update('UPDATE products SET qty = ? WHERE product = ?', [120, 'ASIN']);

        // ELOQUENT MODEL BASED
        $product = Products::where('product', 'ASIN')
            ->update(['qty' => 10]);

        return $product;
    }


    public function deleteProduct()
    {
        // QUERY BUILDER BASED (FLUENT SYNTAX)
        $product = DB::table('products')
            ->where('product', 'ASIN')
            ->delete();

        // QUERY BUILDER BASED (RAW SQL)
        // DB::delete('DELETE FROM products WHERE product = ?', ['ASIN']);

        // ELOQUENT MODEL BASED
        // $product = Products::destroy(5);
        // $product = Products::where('product', 'ASIN')->delete();

        return $product;
    }
}
