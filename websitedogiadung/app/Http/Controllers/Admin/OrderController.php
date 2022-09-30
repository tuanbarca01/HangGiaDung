<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function getOrder()
    {
        $orderlist = OrderDetail::all();
        $ordercus = Order::all();
        return view('back.order',compact('orderlist','ordercus'));
    }
    public function getDeleteOrder($order_id){
        OrderDetail::destroy($order_id);
        Order::destroy($order_id);
        return back();
    }
}
