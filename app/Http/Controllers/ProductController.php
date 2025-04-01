<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Database\Seeders\Productseeder;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('welcome', compact('product'));
    }
}
