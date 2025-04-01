<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('products.create', compact('products', 'categories'));
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();

        $this->save($product, $request);

        return redirect('/products');
    }

    public function show($product)
    {
        $product = Product::find($product);

        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $this->save($product, $request);

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }

    private function save(Product $product, Request $request)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        $product->categories()->attach($request->category_id);
    }
}
