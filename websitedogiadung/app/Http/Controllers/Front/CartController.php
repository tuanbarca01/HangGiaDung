<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use DB;
use Illuminate\Session;
use App\Http\Requests;

use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    //


    public function add($id){
        $product = Product::findOrFail($id);

        Cart::add([
            'id'=>$id,
            'name'=> $product->name,
            'qty'=> 1,
            'price'=> $product->discount ?? $product->price,
            'weight'=> $product->weight ?? 0,
            'options'=>[
                'images'=> $product->productImage,
            ],
        ]);
        return back();
    }

    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.shop.cart',compact('carts','total','subtotal'));
    }


    public function delete($rowId){
        Cart::remove($rowId);
        return back();
    }

    public function destroy(){
        Cart::destroy();
        \Illuminate\Support\Facades\Session::forget('coupon');
        return back();
    }

    //Coupon
    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon = Coupon::where('coupon_code',$data['coupon'])->first();
        if($coupon == true){
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session = \Illuminate\Support\Facades\Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable = 0;
                    if($is_avaiable==0){
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_condition' => $coupon->coupon_condition,
                            'coupon_number' => $coupon->coupon_number,
                        );
                        \Illuminate\Support\Facades\Session::put('coupon', $cou);
                    }
                }else{
                    $cou[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_condition' => $coupon->coupon_condition,
                        'coupon_number' => $coupon->coupon_number,
                    );
                    \Illuminate\Support\Facades\Session::put('coupon', $cou);
                }
                \Illuminate\Support\Facades\Session::save();
                return redirect()->back()->with('message','Thêm mã giảm giá thành công');
            }
        }else{
            return redirect()->back()->with('message','Thêm mã giảm giá không thành công');
        }
    }
}

