<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::latest();
        if (request('search')) {
            $product->where('name', 'like', '%' . request('search') . '%');
        }

        $viewData = [
          'title' => 'Product - Online Store',
          'subtitle' => 'List of products',
          'products' => $product->paginate(3)
        ];
        return view('product.index')
          ->with("viewData", $viewData)
          ->with('products', $product);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
