<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getsearch(Request $request){
        $products = Product::where('name','like','%'.$request->key.'%')
            ->orWhere('price',$request->key)
            ->get();
        return view('front.search',compact('products'));
    }
}
