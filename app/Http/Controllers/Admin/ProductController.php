<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $brands = Brand::get();
        $categories = Category::get();

        return Inertia::render('Admin/Product/Index', 
        ['products' => $products, 
        'brands' => $brands, 
        'categories' => $categories]);
    }

    public function store(Request $request)
    {
       
        $product = new Product;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->save();

        //check if product has images upload 

        if ($request->hasFile('product_images')) {
            $productImages = $request->file('product_images');
            foreach ($productImages as $image) {
                // Generate a unique name for the image using timestamp and random string
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                // Store the image in the public folder with the unique name
                $image->move('product_images', $uniqueName);
                // Create a new product image record with the product_id and unique name
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'product_images/' . $uniqueName,
                ]);
            }
        }
        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }
}
