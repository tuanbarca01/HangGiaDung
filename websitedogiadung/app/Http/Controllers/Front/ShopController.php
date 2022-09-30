<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function  show($id){
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('tag',$product->tag)
            ->limit(3)
            ->get();

        return view('front.shop.show', compact('product','relatedProducts'));
    }
}
