<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;

class CouponController extends Controller
{
    //
    public function insert_coupon(){
        return view('back.coupon.addcoupon');
    }
    public function list_coupon(){
        $coupon = Coupon::orderby('coupon_id','DESC')->get();
        return view('back.coupon.list-coupon',compact('coupon'));
    }
    public function insert_coupon_code(Request $request){
        $data = $request->all();
        $coupon = new Coupon;
        $coupon->coupon_name = $data['coupon_name'];
        $coupon->coupon_number = $data['coupon_number'];
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->coupon_time = $data['coupon_time'];
        $coupon->coupon_condition = $data['coupon_condition'];
        $coupon->save();

        return back();
//        Session::put('message','Thêm mã giảm giá thành công');
//        return Redirect::to('add-coupon');
    }
    public function delete_coupon($coupon_id){
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();
        return back();
    }
}
