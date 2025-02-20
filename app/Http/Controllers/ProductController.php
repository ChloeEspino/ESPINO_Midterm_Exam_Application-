<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = [
            ['name' => 'Smartphone', 'price' => 699],
            ['name' => 'Laptop', 'price' => 999],
            ['name' => 'Smartwatch', 'price' => 199],
            ['name' => 'Tablet', 'price' => 999]
        ];

        return view('products', ['products' => $products]);
    }
}
