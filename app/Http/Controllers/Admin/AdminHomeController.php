<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function index()
    {
        $viewData = [
          'title' => 'Admin Page - Online Store',
          'user' => User::all(),
          'products' => Product::latest(),
          'order' => Order::all(),
          'items' => Item::all()
        ];
        return view('admin.home.index')->with("viewData", $viewData);
    }
}
