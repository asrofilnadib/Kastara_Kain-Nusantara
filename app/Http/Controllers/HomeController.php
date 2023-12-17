<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [
          'title' => "Home Page - Kastara",
          'product'=> Product::orderBy('created_at', 'desc')->take(6)->get()
        ];
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Kastara";
        $viewData["subtitle"] =  "About us";
        $viewData["description"] =  "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";
        return view('home.about')->with("viewData", $viewData);
    }

    public function contact()
    {
        $viewData = [
            'title' => 'Contact - Kastara',
            'subtitle' => 'contact',
        ];
        return view('home.contact')->with("viewData", $viewData);
    }
}
