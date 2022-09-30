
@extends('front.layout.master')

@section('title','Shopping Cart')

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
                <div class="head-active">
                    <div class="logo-active">
                        <img src="./img/homepage/logofull.png"
                        alt="">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="slider__image product__slider-image">
                <div class="slider__image-item active product__slider-item" id = "id01">
                    <div class="text">
                        <div class="share">
                            <ul>
                                <li>Home</li>
                                <li>Share</li>
                                <li><i class="fas fa-arrow-right"></i></li>
                            </ul>
                        </div>
                        <div class="product-content">giá trị sản phẩm của <br> không ở chất lượng, mà còn <br> ở sự tinh tế.</div>
                    </div>
                    <img src="front/img/product/slider-home-product.jpg" alt="" class="slider-image-1">
                </div>
            </div>
        </section>
        <section class="product__selection">
            <div class="container">
                <div class="product__selection-title" style="justify-content: space-between">
                    <div class="title-content">
                        <h3>GIỎ HÀNG</h3>
                    </div>
                    <div><i onclick="confirm('Bạn có chắc muốn xóa tất cả') === true ? window.location='./cart/destroy' : ''" style="cursor: pointer">Xóa tất cả </i> </div>
                </div>
                @if(Cart::count() > 0)
                    <div class="product__selection-grid">
                    @foreach($carts as $cart)
                        <div class="selection">
                            <div class="close"><a href="./cart/delete/{{$cart->rowId}}">X</a></div>
                            <div class="selection-container">
                                <div class="selection-img preview-img">
                                   <img src="front/img/product/detail/product-{{$cart->id}}.jpg" style="height: 100%;overflow: hidden">
                                </div>
                                <h4 class="selection-title pro-details_main-info-h2">
                                    {{$cart->name}} x{{$cart->qty}}
                                </h4>
                                <div class="selection-price">
                                    <p>Giá</p>
                                    <p>:</p>
                                    <div class="price">
                                        {{number_format($cart->price,0,',','.')}} VND
                                    </div>
                                </div>
                                <div class="selection-detail">
                                    <a href="/shop/product/{{$cart->id}}">
                                        <i class="fas fa-arrow-right" style="margin-top: 2px"></i>
                                        <p>CHI TIẾT</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                    <div class="total">
                        <form method="post" action="{{url('/check-coupon')}}">
                            @csrf
                            <input type="text" name ='coupon' placeholder="Nhập mã giảm giá">
                            <input type="submit" name="check_coupon" value="Áp dụng mã giảm giá">
                        </form>
                        <ul>
                            <li>
                                @if(\Illuminate\Support\Facades\Session::get('coupon'))
                                    @foreach(\Illuminate\Support\Facades\Session::get('coupon') as $key=>$cou)
                                        @if($cou['coupon_condition'] == 1)
                                            Mã giảm: {{$cou['coupon_number']}} %
                                            <p>
                                                @php
                                                    $total_coupon = (floatval($total)*1000*$cou['coupon_number'])/100;
                                                    echo '<p>Tổng giảm: '.number_format($total_coupon,0).'VND</p>';
                                                @endphp
                                            </p>
                                            <p>Tổng cộng: {{number_format(floatval($total)*1000-$total_coupon,0)}}VND</p>
                                        @elseif($cou['coupon_condition'] == 2)
                                            Mã giảm: {{number_format($cou['coupon_number'],0)}} VND
                                            <p>
                                                @php
                                                    $total_coupon = floatval($total)*1000- $cou['coupon_number'];
                                                @endphp
                                            </p>
                                            <p>Tổng cộng: {{number_format($total_coupon,0)}}VND</p>
                                        @else

                                        @endif
                                    @endforeach
                                @else
                                    Tổng cộng: {{number_format(floatval($total)*1000)}}VND
                                @endif
                            </li>
                        </ul>
                        {{--                    <div class="price-total">Thành tiền: {{number_format($total_coupon,0)}}VND</div>--}}
                        <div class="complete"><a href="./checkout">Thanh Toán</a></div>
                    </div>
                @else
                    <div class="product__selection-grid" style="margin: 50px">
                        <h4>Giỏ Hàng Trống</h4>
                    </div>
                @endif


            </div>
        </section>
@endsection
