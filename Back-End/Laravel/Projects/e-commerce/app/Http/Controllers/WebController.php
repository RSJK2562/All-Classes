<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    // Home page start
    public function index(Request $request)
    {
        $allProduct = Product::all();
        $product = Product::paginate(4);

        if ($request->ajax() && $request->action == "search-product") {
            $product = Product::where('sub_category_id', $request->sub_cat_id)->paginate(4);
        }

        $data['subcategories'] = SubCategory::all();
        $data['product'] = $product;
        $data['allproduct'] = $allProduct;

        if ($request->ajax() && $request->action == "search-product") {
            return view('web.inc.product_search')->with($data);
        }

        return view('web.index')->with($data);
    }
    // Home page end

    // Shop Page
    public function shop(Request $request)
    {
        $perPage = 9;
        $product = Product::paginate($perPage);
        $all_product = Product::all();

        if ($request->ajax()) {
            $query = Product::query();
            $allProduct = Product::query();

            if ($request->sub_cat_id) {
                $query->where('sub_category_id', $request->sub_cat_id);
                $allProduct->where('sub_category_id', $request->sub_cat_id);
            }

            if ($request->cat_id) {
                $query->where('category_id', $request->cat_id);
                $allProduct->where('category_id', $request->cat_id);
            }

            if ($request->range) {
                $query->where('price', '<=', $request->range);
                $allProduct->where('price', '<=', $request->range);
            }

            $all_product = $allProduct->get();
            $product = $query->paginate(9);
        }
        // dd($product->toArray());

        $data['category'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $data['product'] = $product;
        $data['all_product'] = $all_product;
        $data['perPage'] = $perPage;

        if ($request->ajax()) {
            return view('web.inc.shop_search')->with($data);
        }
        return view('web.shop')->with($data);
    }
    // Shop page end

    // add/cart start
    public function addToCart(Request $request)
    {
        if (empty($request->cartId)) {
            $cart = Cart::where('product_id', $request->prodId)->where('user_id', Auth::id())->first();

            if (!$cart) {
                // Create a new cart entry if it doesn't exist
                $cart = new Cart();
                $cart->product_id = $request->prodId;
                $cart->user_id = Auth::id();
                $cart->save();
                $msg = 'Product added to cart successfully';
            } else {
                $msg = 'Product already in cart';
            }
            // Get the updated cart count
            $cart_count = Cart::where('user_id', Auth::id())->count();
        } else {
            // Update an existing cart entry if cartId is not empty
            $cart = Cart::find($request->cartId);

            if ($cart && $cart->user_id == Auth::id()) {
                $cart->quantity = $request->qty ?? $cart->quantity;
                $cart->save();

                $msg = 'Cart updated successfully';
            } else {
                $msg = 'Cart not found or unauthorized';
            }
        }

        return response()->json(['success' => true, 'cart_count' => $cart_count, 'message' => $msg]);
    }
    // add/cart end

    public function removerCart(Request $request)
    {
        $cart = Cart::find($request->cartId);
        if (!empty($cart)) {
            $cart->delete();
            $cart_count = Cart::where('user_id', Auth::id())->count();
            $msg = 'Remove Product';
        } else {
            $msg = 'Product not found or unauthorized';
        }
        return response()->json(['success' => true, 'cart_count' => $cart_count, 'message' => $msg]);
    }

    public function productDetails()
    {
        return view('web.product-details');
    }

    public function cart()
    {
        $cartData = Cart::where('user_id', Auth::id())->get();
        // dd($cartData);
        return view('web.cart', compact('cartData'));
    }

    public function checkout()
    {
        return view('web.checkout');
    }

    public function testimonial()
    {
        return view('web.testimonial');
    }

    public function contact()
    {
        return view('web.contact');
    }
}
