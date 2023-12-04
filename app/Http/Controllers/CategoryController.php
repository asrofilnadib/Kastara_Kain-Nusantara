<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $viewData = [
            'title' => 'kastara',
            'category' => Category::all()
        ];
        return view('categories.category')->with('viewData', $viewData);
    }
}
