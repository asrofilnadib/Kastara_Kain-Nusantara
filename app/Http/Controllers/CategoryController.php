<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $viewData = [
            'title' => 'kastara',
            'category' => Category::all(),
        ];
        return view('category.categories')->with('viewData', $viewData);
    }

    public function show(Category $category)
    {
        $viewData = [
            'title' => 'Category'.$category->name.'- Kastara',
            'products' => Product::latest(),
            'category' => $category,
        ];
        return view('category.category')->with('viewData', $viewData);
    }
}
