<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_code' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'description' => 'required',
            'allergies' => 'required|array',
            'allergies.*' => 'string',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('public/images');
        $imageUrl = Storage::url($imagePath);

        // Create a new product with the image path
        Product::create([
            'product_code' => $request->product_code,
            'image' => $imageUrl,
            'name' => $request->name,
            'description' => $request->description,
            'allergies' => json_encode($request->allergies),
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_code' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'description' => 'required',
            'allergies' => 'required|array',
            'allergies.*' => 'string',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->image) {
                Storage::delete(str_replace('/storage', 'public', $product->image));
            }

            $imagePath = $request->file('image')->store('public/images');
            $product->image = Storage::url($imagePath);
        }

        // Update other fields
        $product->update([
            'product_code' => $request->product_code,
            'name' => $request->name,
            'description' => $request->description,
            'allergies' => json_encode($request->allergies),
        ]);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::delete(str_replace('/storage', 'public', $product->image));
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}
