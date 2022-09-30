
@extends('front.layout.master')

@section('title','Search')

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
                                <li><a href="./">Home</a></li>
                                <li><a href="#">Share</a></li>
                                <li><i class="fas fa-arrow-right"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div style="position: absolute;transform: translate(60%,350%)">
                        <form action="" method="get">
                            <input type="text" name="key" placeholder="Tìm kiếm ..." style="width: 500px;height: 50px;font-size: 30px">
                            <button type="submit" name="submit" style="width: 100px;height: 50px;transform: translateY(-15%)"><i class="fas fa-search" style="color: #000"></i></button>
                        </form>

                    </div>
                    <img src="front/img/product/slider-home-product.jpg" alt="" class="slider-image-1">
                </div>
            </div>
        </section>
        <section class="product__selection">
            <div class="container">
                <div class="product__selection-title" style="justify-content: space-between">
                    <div class="title-content">
                        <h3>Kết quả tìm kiếm</h3>
                        <div>Tìm thấy {{count($products)}} sản phẩm </div>
                    </div>
                </div>
                    <div class="product__selection-grid">
                    @foreach($products as $product)

                        <div class="selection">
                            <div class="selection-container">
                                <div class="selection-img preview-img">
                                   <img src="front/img/product/detail/product-{{$product->id}}.jpg" style="height: 100%;overflow: hidden">
                                </div>
                                <h4 class="selection-title pro-details_main-info-h2">
                                    {{$product->name}}
                                </h4>
                                <div class="selection-price">
                                    <p>Giá</p>
                                    <p>:</p>
                                    <div class="price">
                                        {{number_format($product->price,3)}} VND
                                    </div>
                                </div>
                                <div class="selection-detail">
                                    <a href="/shop/product/{{$product->id}}">
                                        <img src="front/img/product/arrow.png" alt="">
                                        <p>CHI TIẾT</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
