<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8); // Paginate 8 products per page
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required|in:smartphone,vr,sd_card,software', // Updated to match model
            'description' => 'required',
            'category' => 'nullable|string',
            'author_name' => 'nullable|string',
            'author_image' => 'nullable|string',
            'rating' => 'nullable|numeric|min:0|max:5',
            'enrollment_count' => 'nullable|integer|min:0',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('products', 'public');
        }

        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
}
