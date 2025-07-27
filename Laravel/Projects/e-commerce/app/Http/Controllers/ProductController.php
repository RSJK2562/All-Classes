<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(10);
        return view('admin.productlist', compact('product'));
    }

    public function create()
    {
        $category = Category::all();
        $subCategory = SubCategory::all();
        return view('admin.productcreate', compact('category', 'subCategory'));
    }

    public function stora(Request $request)
    {

        $product = new Product();

        $img_name = null;
        if ($request->file('image')) {
            $image = $request->file('image');
            $img_name = "IMG_" . time() . "." . $image->extension();
            $image->move(public_path('admin/img/product/'), $img_name);
            $image_path = 'admin/img/product/' . $img_name;
        }

        $product->name = $request->title;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->image = $image_path;
        $product->save();

        return response()->json([
            'success' => true,
        ]);
    }
}
