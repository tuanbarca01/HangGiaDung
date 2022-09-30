<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $Products = Product::where('featured', true)->where('brand_id', 1)->get();
        return view('front.index', compact('Products'));
    }
}
