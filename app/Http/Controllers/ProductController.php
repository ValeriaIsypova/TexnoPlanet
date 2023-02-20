<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $i = \App\Models\Product::Where('id', '>', 0) -> get();
        return view('home/catalog', ["product" => $i]);
    }

    public function main() {
        $i = \App\Models\Product::Where('id', '>', 0)->limit(5) -> get();
        return view('/about', ["product" => $i]);
    }

    public function addtocart($id) {
        $product = \App\Models\Product::find($id);
        $bufferif = \App\Models\Cart::Where('product_id', "=", $id) -> get();
        $count = 1;
        if ($bufferif -> count() == 0) {
            $cart = new \App\Models\Cart();
            $cart -> product_id = $product -> id;
            $cart -> title = $product -> title;
            $cart -> count = $count;
            $cart -> price = $product -> price;
            $cart -> photo = $product -> photo;
            $cart -> save();
        }
        else {
            $bufferif[0] -> count++;
            $bufferif[0] -> save();
        }
        return redirect('/catalog');
    }

    public function cart() {
        $i = \App\Models\Cart::where('id', '>', 0) -> get();
        return view('home/cart', ["products" => $i]);
    }

    public function filter() {
        $filter = \App\Models\Product::query();
        $min_value = null;
        $max_price = null;
        if (request()->get('min_value')){
            $min_value = request()->get('min_value');
        }
        if (request()->get('max_value')) {
            $max_price = request()->get('max_value');
        }
        if ($min_value && $max_price) {
            $filter = $filter->get()->toArray();
        }
        // return $request;




    }


}
