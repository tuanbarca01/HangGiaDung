<!DOCTYPE html>
<html>

<head>
    <base href="{{asset('/')}}">

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | Bán Đồ Gia Dụng</title>
    <link rel="icon" href="https://www.vivosmartphone.vn/themes/vivo/favicon.ico">
    <meta name="title" content="" />
    <meta name="description" content="" />
    <meta property="og:locale" content="vi" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Trang chủ" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />

    <link rel="stylesheet" href="front/dest/style.min.css">
    <link rel="stylesheet" href="front/dest/fonts.css">
    <link rel="stylesheet" href="front/dest/stylelibs.min.css">
    <link rel="stylesheet" href="front/fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="stylesheet" href="front/fontawesome-free-6.0.0-beta2-web/css/brands.css">
    <link rel="stylesheet" href="front/fontawesome-free-6.0.0-beta2-web/css/solid.css">
    <link rel="stylesheet" href="front/dest/flickity.min.css" media="screen">

</head>

<body>
<h1>FURNITOWN</h1>
<header>

    <a href="./login" class="register">
        <div class="register-acc">REGISTER</div>
        <div class="register-log">LOGIN</div>
    </a>
    <div class="container">
        <ul>
            <li><a href="./">HOME</a></li>
            <li><a href="shop/overall">SẢN PHẨM</a></li>

            <li><a><i class="fas fa-home" style="font-size: 30px"></i></a></li>
            <li><a href="./service">DỊCH VỤ</a></li>

            <li><a href="#footer">LIÊN HỆ</a></li>
        </ul>
    </div>
    <div style="display: flex">
        <div style="display: flex;align-items: center"><a href="./search"><i class="fas fa-search" style="color: #fff"></i></a></div>
        <div class="cart">
            <!-- <div class="zero active">0</div> -->
            <div class="cart-logo"><i class="fas fa-cart-arrow-down"></i></div>
        </div>
    </div>


    <div class="cart-detail" id="myModal">
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
            <span class="cart-price cart-header cart-column">Giá</span>
            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
        </div>
        <div class="cart-items">
            @foreach(Cart::content() as $cart)
                <div class="cart-row">
                <div class="cart-item cart-column">
                    <img class="cart-item-image" src="front/img/product/detail/product-{{$cart->id}}.jpg" width="100" height="100">
                    <span class="cart-item-title">{{$cart->name}}</span>
                </div>
                <span class="cart-price cart-column">{{number_format($cart->price, 0)}} VND</span>
                <div class="cart-quantity cart-column">
                    <input class="cart-quantity-input" type="number" value="{{$cart->qty}}">
                    <button class="btn btn-danger" type="button"><a href="./cart/delete/{{$cart->rowId}}">Xóa</a></button>
                </div>
            </div>
            @endforeach
            <div class="cart-total">
                <strong class="cart-total-title">Tổng Cộng:</strong>
                <span class="cart-total-price">{{Cart::total()}}VNĐ</span>
            </div>
        </div>
        <div class="btn-set">
            <a href="./cart" style="width: 100%;text-align: center">Xem Giỏ Hàng</a>
        </div>
    </div>

</header>

{{--Body here--}}
@yield('body')
<footer id="footer">
    <div class="container">
        <div class="logo-foot">
            <i class="fas fa-home" style="color: yellow;font-size: 50px"></i>
        </div>
        <span></span>

        <p>

            Thời gian mở cửa: 8h - 18h  - Thứ 2 đến Chủ nhật
            <br>
            Số 7/22A, Ấp 6, xã Đông Thạnh, huyện Hóc Môn, thành phố Hồ Chí Minh
            <br>
            Hotline: 0937.168.938
            <br>
            Email: dogiadung@gmail.com
        </p>
        <div class="back-to-top">
            Back To Top
        </div>
    </div>
</footer>
</main>
<script type="text/javascript" src="front/dest/jsmain.min.js"></script>
<script type="text/javascript" src="front/js/main.js"></script>
<script src="front/js/flickity.pkgd.min.js"></script>
</body>

</html>
