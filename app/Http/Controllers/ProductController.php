<?php

namespace App\Http\Controllers;

use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::latest();
        if (request('search')) {
            $product
              ->where('kode_product', 'like', '%' . request('search') . '%')
              ->orWhere('name', 'like', '%' . request('search') . '%');
        }

        $viewData = [
          'title' => 'Product - Online Store',
          'subtitle' => 'List of products',
          'products' => $product->paginate(3)
        ];
        return view('product.index')
          ->with("viewData", $viewData);
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $viewData = [];
        $viewData["title"] = $product->getName()." - Online Store";
        $viewData["subtitle"] =  $product->getName()." - Product information";
        $viewData["product"] = $product;

        return view('product.show')->with("viewData", $viewData);
    }
}
