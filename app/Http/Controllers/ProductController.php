<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::with('company')->latest()->paginate(3);
        return view('products.index', [
            'products' => $products
        ]);
    }

   
    public function create()
    {
        return view('products.create');
    }

    
    
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    
    public function store(Product $product)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'price' => ['required'],

        ]);
        
        $product = Product::create([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price'),
            'company_id' => 1
        ]);
        return redirect('/products');
    }


    
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);

    }

    
    public function update(Product $product)
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'min:10'],
            'price' => ['required']
        ]);
        $product->update([
            'name' => request('name'),
            'description' => request('description'),
            'price' => request('price')
        ]);
        // redirect after updating the product :
        return redirect('/products/' . $product->id); // this is concatenation instead of ("/products/{$product->id}")
    }

   
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}
