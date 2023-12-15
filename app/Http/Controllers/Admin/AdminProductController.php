<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["category"] = Category::all();
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with("viewData", $viewData);
    }

    public function store(Request $request)
    {
        (new \App\Models\Product)->validate($request);

        $newProduct = new Product();
        $newProduct->setName($request->input('name'));
        $newProduct->setCategoryId($request->input('category_id'));
        $newProduct->setSKU($request->input('kode_product'));
        $newProduct->setSlug($request->input('slug'));
        $newProduct->setDescription($request->input('description'));
        $newProduct->setPrice($request->input('price'));
        $newProduct->setImage('game.png');
        $newProduct->save();

        /*$creationData = $request->only(['name', 'description', 'price']);
        $creationData['image'] = strtolower($creationData['name']);
        Product::create($creationData);*/

        if ($request->hasFile('image')) {
            $imageName = strtolower($newProduct->getName().".".$request->file('image')->extension());
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct->setImage($imageName);
            $newProduct->save();
        }

        return back();
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->items()->delete();
        $product->delete();
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Product - Online Store";
        $viewData["product"] = Product::findOrFail($id);
        $viewData["category"] = Category::all();
        return view('admin.product.edit')->with("viewData", $viewData);
    }

    public function update(Request $request, $id)
    {
        (new \App\Models\Product)->validate($request);

        $product = Product::findOrFail($id);
        $product->setName($request->input('name'));
        $product->setDescription($request->input('description'));
        $product->setPrice($request->input('price'));

        if ($request->hasFile('image')) {
            $imageName = strtolower($product->getName().".".$request->file('image')->extension());
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product->setImage($imageName);
        }
        $product->save();
        return redirect()->route('admin.product.index');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return \response()->json(['slug' => $slug]);
    }
}
