
@extends('front.layout.master')

@section('title','Đã thanh toán')

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
            <div class="container" style="text-align: center">
                <p style="font-size: 30px">ĐÃ THANH TOÁN THÀNH CÔNG</p>
                <p style="font-size: 30px;">Cảm ơn quý khác đã sử dụng dịch vụ</p>
                <i class="fas fa-smile-beam" style="font-size: 500px;color: limegreen"></i>
            </div>
        </section>
        <footer>
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
@endsection
