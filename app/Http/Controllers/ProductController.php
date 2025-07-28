<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller {
    
    public function index() {
        // Logic to display the product management page
        // Fetch the authenticated user
        $user = auth()->user();
        $categories = Category::all(); // Fetch all categories for the dropdown
        $products = Product::paginate(10); // Fetch all products for display

        $prices = (new PriceController())->coinsData(); // Fetch prices if needed

        return view('admin.products', compact('user', 'categories', 'products', 'prices'));
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|numeric|min:0',
            'image' => 'string|nullable|min:4', // Assuming image is a string path
            'stock' => 'required|integer|min:1',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->image = $request->input('image'); // Assuming image is a string path
        $product->stock = $request->input('stock');
        $product->save(); // Save the product to the database

        $data = $product;

        return redirect()->route('admin-products')->with('success', 'Product updated successfully.');
    }

    public function update(Request $request, $id) {
        // Logic to update an existing product
        // Validate and update the product data
        return redirect()->route('admin-products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id) {
        // Logic to delete a product

        $product = Product::findOrFail($id);
        $product->delete();  // Delete the product from the database

        // Find the product by ID and delete it
        return redirect()->route('admin-products')->with('success', 'Product deleted successfully.');
    }
}
