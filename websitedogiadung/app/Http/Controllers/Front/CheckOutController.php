<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CheckOutController extends Controller
{
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts','total','subtotal'));
    }

    public function addOrder(Request $request){
        if ($request->payment_type == 'pay_later'){
            //01.Thêm đơn hàng
            $order = Order::create($request->all());
            //02.Thêm chi tiết đơn hàng
            $carts = Cart::content();

            foreach ($carts as $cart){
                $data = [
                    'order_id' => $order->id,
                    'product_id' => $cart->id,
                    'qty' => $cart->qty,
                    'amount' => $cart->price,
                    'total' => $cart->price * $cart->qty,
                ];

                OrderDetail::create($data);
            }
            //03.Gửi email
            $total = Cart::total();
            $subtotal = Cart::subtotal();

            $this->sendEmail($order,$total,$subtotal);

            //04.Xóa giỏ hàng
            Cart::destroy();
            //05.Trả về kết quả
            return view('front.checkout.success');
        }
        else{
            return "Thanh toán Online hiện không hỗ trợ";
        }
    }
    private function sendEmail($order,$total,$subtotal){
        $email_to = $order->email;

        Mail::send('front.checkout.email', compact('order','total', 'subtotal'), function ($message) use ($email_to){
            $message->from('loyal2805@gmail.com', 'Loyal Nguyễn');
            $message->to($email_to, $email_to);
            $message->subject('Thông tin đơn hàng');
        });
    }

}
