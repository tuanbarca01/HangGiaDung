@extends('front.layout.master')

@section('title','Check Out')

@section('body')
<main>
    <nav class="nav2">
    </nav>
    <div class="table">
        <div class="table1">
            <h2>Hello,</h2>
            <p>Register or Log in</p>
            <input type="tel" placeholder="Phone Number pls">
            <button>COUNTINUE</button>
            <div class="email">login with email?</div>
            <p style="text-align:center;">Or countinue with</p>
            <div class="another">
                <div class="face"><a href=""><i class="fab fa-facebook"></i></a></div>
                <div class="gg"><a href=""><i class="fab fa-google"></i></a></div>
                <div class="za"><a href=""><i class="fab fa-twitter-square"></i></a></div>
            </div>
        </div>
        <div class="table2">
            <img src="./img/homepage/seele3.jpg" alt="">
        </div>
    </div>
    <section class="slider product__slider">
        <div class="slider__image product__slider-image">
            <div class="slider__image-item active product__slider-item" id = "id01">
                <div class="text">
                    <div class="share">
                        <ul>
                            <li>Home</li>
                            <li>Share</li>
                            <li><img src="./img/homepage/next.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="product-content">giá trị sản phẩm <br> không ở chất lượng, mà còn <br> ở sự tinh tế.</div>
                </div>
                <img src="./img/product/slider-home-product.jpg" alt="" class="slider-image-1">
            </div>
        </div>
    </section>
    <section class="product__selection">
        <div class="container">
            <form action="" method="post" class="checkout-form">
                @csrf
                <div class="check-out">

                    @if(Cart::count()>0)
                        <div class="cus-detail">
                            <h3>Thông Tin Khách Hàng</h3>
                            <div class="name">
                                <div class="first">
                                    <p>First name</p>
                                    <input type="text" name="first_name">
                                </div>
                                <div class="last">
                                    <p>Last name</p>
                                    <input type="text" name="last_name">
                                </div>
                            </div>
                            <div class="country">
                                <p>Country</p>
                                <input type="text" name="country">
                            </div>
                            <div class="street">
                                <p>Street Address</p>
                                <input type="text" name="street_address">
                            </div>
                            <div class="post">
                                <p>Postcode/Zip</p>
                                <input type="text" name="postcode_zip">
                            </div>
                            <div class="post">
                                <p>Town/City</p>
                                <input type="text" name="town_city">
                            </div>
                            <div class="contact">
                                <div class="email">
                                    <p>Email</p>
                                    <input type="text" name="email">
                                </div>
                                <div class="phone">
                                    <p>Phone Number</p>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="order-detail">
                            <h3>Thông Tin Đơn Hàng</h3>
                            <div class="order-title">
                                <p>Product</p>
                                <p>Total</p>
                            </div>
                            @foreach($carts as $cart)
                                <div class="order-data">
                                    <p>{{$cart->name}} X{{$cart->qty}}</p>
                                    <p>{{number_format($cart->price * $cart->qty,0)}}VND</p>
                                </div>
                            @endforeach
{{--                            (\Illuminate\Support\Facades\Session::get('coupon'))--}}
{{--                            @foreach(\Illuminate\Support\Facades\Session::get('coupon') as $key=>$cou)--}}
{{--                                <div>Mã giảm: {{$cou->coupon_name}}</div>--}}
{{--                            @endforeach--}}
                            @if(\Illuminate\Support\Facades\Session::get('coupon'))
                                @foreach(\Illuminate\Support\Facades\Session::get('coupon') as $key=>$cou)
                                    <div class="order-data">
                                        <p>Mã Giảm</p>
                                        @if($cou['coupon_condition'] == 1)
                                            {{$cou['coupon_number']}} %

                                                @php
                                                    $total_coupon = (floatval($total)*1000*$cou['coupon_number'])/100;
                                                @endphp
                                        @elseif($cou['coupon_condition'] == 2)
                                            {{number_format($cou['coupon_number'],0)}} VND

                                                @php
                                                    $total_coupon = floatval($total)*1000- $cou['coupon_number'];
                                                @endphp
                                        @else
                                        @endif



                                </div>
                                @endforeach
                            @else
                                <div class="order-data">
                                    <p>Mã Giảm</p>
                                    0
                                    @php
                                        $total_coupon = (floatval($total)*1000);
                                    @endphp
                                </div>
                            @endif
                            <div class="order-data">
                                <p>Total</p>
                                <p style="color: orange">{{number_format($total_coupon)}}VND</p>
                            </div>
                            <div>
                                <input type="radio" id="pc-check" name="payment_type" value="pay_later" checked>Thanh toán khi nhận hàng
                            </div>
{{--                            <div>--}}
{{--                                <input type="radio" id="pc-paypal" name="payment_type" value="online_payment">Thanh toán Online--}}
{{--                            </div>--}}
                            <div class="order">
                                <button type="submit" style="background-color: transparent; color: #fff; border: none; cursor: pointer; width: 100%;height: 100%">ĐẶT HÀNG</button>
                            </div>
                        </div>
                    @else
                        <p>Giỏ Hàng Trống</p>
                    @endif
                </div>
            </form>


        </div>
    </section>
    <footer>
        <div class="container">
            <div class="logo-foot">
                <img src="./img/homepage/logofull.png" alt="">
            </div>
            <span></span>

            <p>

                Thời gian mở cửa: 8h - 18h  - Thứ 2 đến Chủ nhật
                <br>
                Số 7/22A, Ấp 6, xã Đông Thạnh, huyện Hóc Môn, thành phố Hồ Chí Minh
                <br>
                Hotline: 0937.168.938
                <br>
                Email: noithatfunitown@gmail.com
            </p>
            <div class="back-to-top">
                Back To Top
            </div>
        </div>
    </footer>
</main>
@endsection
