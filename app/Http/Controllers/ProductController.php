<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;

class ProductController extends Controller {

    public function store() {
        $products = Product::paginate(12); // Fetch products with pagination
        return view('store', compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id); // Fetch product by ID or fail
        $category = Category::where('id', $product['category_id'])->get(); 
        $category = $category[0]['name'];
        $images = ProductImage::where('product_id', $id)->get(); // Fetch associated images
        return view('store.detail', compact('product', 'category', 'images'));
    }

    public function displayCollections() { return view('collections'); }

    public function displayGold() {
        $products = Product::where('category_id', 1)->paginate(12); // Assuming category_id 1 is for Gold
        return view('collections.gold', compact('products'));
    }

    public function displaySilver() {
        $products = Product::where('category_id', 2)->paginate(12); // Assuming category_id 2 is for Silver
        return view('collections.silver', compact('products'));
    }

    public function displayBucks() {
        $products = Product::where('category_id', 3)->paginate(12); // Assuming category_id 3 is for Bucks
        return view('collections.bucks', compact('products'));
    }

    public function displayNumis() {
        $products = Product::where('category_id', 5)->paginate(12); // Assuming category_id 5 is for Numismatics
        return view('collections.numis', compact('products'));
    }
    
    public function index() {
        $user = auth()->user();
        $categories = Category::all(); // Fetch all categories for the dropdown
        $products = Product::paginate(10); // Fetch all products for display
        $prices = (new PriceController())->prices(); // Fetch prices if needed

        return view('admin.products', compact('user', 'categories', 'products', 'prices'));
    }

    public function save(Request $request) {

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //     'price' => 'required|numeric|min:0',
        //     'category' => 'required|numeric|min:0',
        //     'image' => 'string|nullable|min:4', // Assuming image is a string path
        //     'stock' => 'required|integer|min:1',
        // ]);  

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        // $product->image = $request->input('image'); // Assuming image is a string path
        $product->stock = $request->input('stock');
        $product->multiplier = $request->input('multiplier', 1.0); // Default to 1.0 if not provided
        $product->coin_base = $request->input('coin_base', 0.0); // Default to 0.0 if not provided
        $product->coin_base_type = $request->input('coin_base_type', 'other'); // Default to 'other' if not provided

        $product->save(); // Save the product to the database
        $data = $product;

        if($request->hasFile("image")){

            $imagen = $request->file("image");                        
            $nombreimagen = $imagen->getClientOriginalName();
            $nombreimagen = 'producto_'.$product->id.'_main_'.$nombreimagen;
            $ruta = public_path("assets/products/mains/");            
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $product->image = $nombreimagen;
        }

        $product->save();

        if($request->hasFile('images')) {
            $allowedfileExtension=['jpg','jpeg','png'];

            foreach ($request->images as $photo) {
                    $filename = $photo->getClientOriginalName();
                    $filename = 'producto_'.$product->id.'_imagen'.$filename;
                    //$imagen = $request->file("image");                   
                    $ruta = public_path("assets/products/supports/");            
                    copy($photo->getRealPath(),$ruta.$filename);

                    ProductImage::create([
                        'product_id' => $product->id,
                        'filename' => $filename
                    ]);
                }
        }

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
