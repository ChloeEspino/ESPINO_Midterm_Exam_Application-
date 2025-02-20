<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = [
            ['name' => 'Smartphone', 'price' => 9999],
            ['name' => 'Laptop', 'price' => 24999],
            ['name' => 'Earbuds', 'price' => 599],
            ['name' => 'Headphone', 'price' => 6999],
            ['name' => 'Tablet', 'price' => 14999],
            ['name' => 'Stylus', 'price' => 2999],
            ['name' => 'Smartwatch', 'price' => 7999]
        ];

        return view('products', ['products' => $products]);
    }
}
