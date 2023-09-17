<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            '*' => 'required'
        ]);
        $newProduct = Product::create($data);
        return redirect('product')->with('success' . 'Product Insert Successfully');
    }
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function view(Product $product)
    {
        return view('products.view', ['product' => $product]);
    }
    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            '*' => 'required'
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('success', 'Product Updated Successfully!');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully!');
    }
}