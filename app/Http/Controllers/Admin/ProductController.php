<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()  {
        $products = Product::get();

      return Inertia::render('Admin/Product/Index',['products'=>$products]);
    }
}
