<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class OverallController extends Controller
{
    //
    public function overall(){
        $Products1 = Product::where('product_category_id',1)->limit(3)->get();
        $Products2 = Product::where('product_category_id',2)->limit(3)->get();
        $Products3 = Product::where('product_category_id',3)->limit(3)->get();
        return view('front.shop.overall',compact('Products2','Products1','Products3'));
    }

}
