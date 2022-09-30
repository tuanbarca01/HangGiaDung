<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getservice(){
        $coupon = Coupon::orderby('coupon_id','DESC')->get();
        return view('front.shop.showcoupon',compact('coupon'));
    }
}
