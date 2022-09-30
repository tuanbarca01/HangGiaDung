@extends('front.layout.master')

@section('title','Home')

@section('body')
    <main>
        <!-- login -->
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
                <img src="front/img/homepage/seele3.jpg" alt="">
            </div>
        </div>
        <section class="slider">
            <div class="btn-menu">
                <div class="head-content">
                    <i class="fas fa-home" style="color: yellow;font-size: 50px;margin-left: 60px"></i>
                    <div class="btn-hamburger">
                        <span></span>
                    </div>
                </div>
                <div class="head-active">
                    <div class="menu">Menu</div>
                    <div class="logo-active">
                        <i class="fas fa-home" style="color: yellow;font-size: 50px"></i>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav class="nav">
                <div class="menu-col">
                    <div class="head-col">
                        <h4>
                            ĐOGIADUNG
                        </h4>
                        <div class="head-link">
                            <p>LIÊN KẾT</p>
                            <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z" />
                            </svg>
                            <svg height="511pt" viewBox="0 -71 511.99912 511" width="511pt" xmlns="http://www.w3.org/2000/svg"><path d="m255.980469 370.492188c-.042969 0-.089844 0-.136719 0-15.449219-.105469-152.027344-1.351563-190.722656-11.816407-27.042969-7.269531-48.390625-28.59375-55.679688-55.640625-10.125-38.011718-9.4804685-111.195312-9.410156-117.039062-.0664062-5.816406-.71875-79.605469 9.378906-117.929688.011719-.035156.019532-.074218.03125-.109375 7.207032-26.738281 29.035156-48.722656 55.613282-56.011719.066406-.019531.136718-.035156.203124-.054687 38.257813-10.054687 175.105469-11.285156 190.585938-11.390625h.277344c15.488281.105469 152.429687 1.351562 190.769531 11.832031 26.972656 7.25 48.304687 28.546875 55.613281 55.558594 10.503906 38.351563 9.53125 112.300781 9.425782 118.542969.074218 6.148437.6875 78.675781-9.378907 116.878906-.007812.039062-.019531.074219-.027343.109375-7.292969 27.046875-28.636719 48.371094-55.710938 55.648437-.035156.011719-.074219.019532-.109375.03125-38.253906 10.050782-175.105469 11.28125-190.582031 11.390626-.046875 0-.09375 0-.140625 0zm-207.90625-292.167969c-8.890625 33.828125-8.050781 106.675781-8.042969 107.410156v.527344c-.265625 20.203125.667969 78.710937 8.046875 106.421875 3.578125 13.269531 14.105469 23.78125 27.457031 27.371094 28.550782 7.722656 139.789063 10.152343 180.445313 10.4375 40.761719-.285157 152.164062-2.648438 180.503906-10.0625 13.308594-3.601563 23.800781-14.078126 27.402344-27.363282 7.386719-28.117187 8.3125-86.339844 8.042969-106.414062 0-.210938 0-.421875.003906-.632813.367187-20.445312-.355469-79.636719-8.011719-107.570312-.007813-.027344-.015625-.054688-.019531-.082031-3.59375-13.328126-14.125-23.839844-27.476563-27.429688-28.273437-7.730469-139.691406-10.152344-180.445312-10.4375-40.734375.285156-152.027344 2.644531-180.453125 10.050781-13.097656 3.632813-23.863282 14.519531-27.453125 27.773438zm435.136719 219.894531h.011718zm-278.210938-31.726562v-161.996094l140 81zm0 0"/></svg>
                        </div>
                    </div>
                    <div class="body-col">
                        <div class="body-logo">
                            <i class="fas fa-home" style="color: yellow;font-size: 50px"></i>
                            <div class="close-nav">
                                <span></span>
                            </div>
                        </div>
                        <div class="body-menu">
                            <ul>
                                <li class="menu-home" data-menu = "id1" ><a href="./" style="color: #fff">HOME</a> </li>
                                <li class="menu-product" data-menu = "id2"><a href="shop/overall" style="color: #fff">SẢN PHẨM</a> </li>
                                <li class="menu-service" data-menu = "id3"><a href="./service" style="color: #fff">DỊCH VỤ</a></li>
                                <li><a href="#footer" style="color: #fff">LIÊN HỆ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- <nav class="nav2">
            </nav> -->
            <div class="slider__image">
                <div class="slider__image-item active" id = "id01">
                    <div class="text">
                        <div class="share">
                            <ul>
                                <li>Home</li>
                                <li>Share</li>
                                <li><i class="fas fa-arrow-right"></i></li>
                            </ul>
                        </div>
                        <div  class="slider__img">
                            <div class="slider__img-text">
                                <h2>DOGIADUNG.COM</h2>
                                <p>Nơi tìm thấy mảnh ghép còn thiếu cho ngôi nhà của bạn</p>
                                <a href="#footer">Về chúng tôi</a>
                            </div>
                            <img src="front/img/homepage/dogiadung.png" alt="">
                        </div>

                    </div>
                    <img src="front/img/homepage/slider.jpg" alt="" class="slider-image-1">
                </div>
            </div>

        </section>
        <section class="product-top">
            <div class="container">
                <p style="font-size: 30px">MẶT HÀNG NỔI BẬT</p>
                <div class="product-slider main-carousel" data-flickity='{ "cellAlign": "center", "contain": true}'style="width: 1000px">
                    @foreach($Products as $Product)
                        <div class="product-item carousel-cell">
                        <div class="pi-pic">
                            <img src="front/img/homepage/{{$Product->ProductImage[0]->path}}" alt="" class="slider-image-">
                            @if($Product-> discount != null)
                                <div class="sale">Sale</div>
                            @endif
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="./cart/add/{{$Product->id}}"><i class="fas fa-shopping-bag"></i></a></li>
                                <li class="quick-view"><a href="./shop/product/{{$Product->id}}">Quick View</a></li>
                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="category-name">{{$Product->tag}}</div>
                            <a href="">
                                <h5>{{$Product->name}}</h5>
                            </a>
                            <div class="product-price">
                                {{number_format($Product->price)}}VND
                            </div>
                        </div>
                    </div>
                    @endforeach
{{--                    <div class="product-item carousel-cell">--}}
{{--                        <div class="pi-pic">--}}
{{--                            <img src="img/product/03.png" alt="">--}}
{{--                            <div class="sale">Sale</div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="icon_heart_alt"></i>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li class="w-icon active"><a href=""><i class="icon_bag-alt"></i></a></li>--}}
{{--                                <li class="quick-view"><a href="overall.blade.php">Quick View</a></li>--}}
{{--                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="pi-text">--}}
{{--                            <div class="category-name">Coat</div>--}}
{{--                            <a href="">--}}
{{--                                <h5>Pure Pineapple</h5>--}}
{{--                            </a>--}}
{{--                            <div class="product-price">--}}
{{--                                $14.00--}}
{{--                            </div>--}}
{{--                            <span>$35.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-item carousel-cell">--}}
{{--                        <div class="pi-pic">--}}
{{--                            <img src="img/product/03.png" alt="">--}}
{{--                            <div class="sale">Sale</div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="icon_heart_alt"></i>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li class="w-icon active"><a href=""><i class="icon_bag-alt"></i></a></li>--}}
{{--                                <li class="quick-view"><a href="overall.blade.php">Quick View</a></li>--}}
{{--                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="pi-text">--}}
{{--                            <div class="category-name">Coat</div>--}}
{{--                            <a href="">--}}
{{--                                <h5>Pure Pineapple</h5>--}}
{{--                            </a>--}}
{{--                            <div class="product-price">--}}
{{--                                $14.00--}}
{{--                            </div>--}}
{{--                            <span>$35.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-item carousel-cell">--}}
{{--                        <div class="pi-pic">--}}
{{--                            <img src="img/product/03.png" alt="">--}}
{{--                            <div class="sale">Sale</div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="icon_heart_alt"></i>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li class="w-icon active"><a href=""><i class="icon_bag-alt"></i></a></li>--}}
{{--                                <li class="quick-view"><a href="overall.blade.php">Quick View</a></li>--}}
{{--                                <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="pi-text">--}}
{{--                            <div class="category-name">Coat</div>--}}
{{--                            <a href="">--}}
{{--                                <h5>Pure Pineapple</h5>--}}
{{--                            </a>--}}
{{--                            <div class="product-price">--}}
{{--                                $14.00--}}
{{--                            </div>--}}
{{--                            <span>$35.00</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>

        </section>
        <section class="product">
            <div class="container">
                <div class="product-grid">
                    <div class="product__left">
                        <p>“ Hãy đến & khám phá Dogiadung.com, để có cơ hội thoả sức lựa chọn về
                            màu sắc và kiểu dáng trong thế giới nội thất; cùng sự an tâm trong việc
                            tư vấn chu đáo, tận tình của đội ngũ nhân viên.  ”</p>
                            <h3>Phòng làm việc</h3>
                            <div>
                                <img src="front/img/homepage/room.jpg" alt="">
                            </div>

                    </div>
                    <div class="product__right">
                        <h3>Phòng khách</h3>
                        <div>
                            <img src="front/img/homepage/sofa2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="product__kitchen">
                    <h3>Nhà bếp</h3>
                    <div class="product__kitchen-img">
                        <img src="front/img/homepage/nhabep.jpg" alt="">
                    </div>

                </div>
                <div class="product__personal">
                    <div class="product__personal-sleep">
                        <h3>Phòng ngủ</h3>
                        <div class="sleep-content">
                            <img src="front/img/homepage/phongngu.jpg" alt="" class="sleep-room">
                            <div class="man">
                                <img src="front/img/homepage/logowhite.png" alt="" class="sleep-logo">
                                <p>“Không gian sáng tạo cho sự thành đạt.”</p>
                                <a href="">MORE <img src="front/img/homepage/nextwhite.png" alt=""></a>
                            </div>
                        </div>

                    </div>
                    <div class="product__personal-bath">
                        <h3>Phòng tắm</h3>
                        <div class="bath-content">
                            <div class="image-bath">
                                <img src="front/img/homepage/nhatam.jpg" alt="">
                            </div>
                            <div class="content">
                                <p>“ Hãy đến & khám phá Dogiadung, để có cơ hội thoả sức lựa chọn về màu sắc và kiểu dáng trong thế giới nội thất; cùng sự an tâm trong việc tư vấn chu đáo, tận tình của đội ngũ nhân viên. ”</p>
                                <img src="front/img/homepage/pen.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
