@extends('front.layout.master')

@section('title','Product')

@section('body')
    <main class="pro-details_main">
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
        <section class="slider pro-details_main-detail">
            <div class="not-container">
                <div class="pro-details_main-preview">
                    <div class="preview-img">
                        <img src="front/img/product/detail/{{ $product->productImage[0]->path}}" alt="" class="img-product" style="height: 100%;overflow: hidden">
                    </div>

                    <div class="pro-btn">
                        <span class="previous">
                            <div class="tri"></div>
                        </span>
                        <span class="next">
                            <div class="tri"></div>
                        </span>
                    </div>

                </div>
                <div class="pro-details_main-info">
                    <h2 class="pro-details_main-info-h2">
                        {{$product->name}}
                    </h2>
                    <div class="info">
                        <ul class="title">
                            @if($product->discount != null)
                                <li>GI?? TI???N</li>
                                <li>Sale</li>
                            @else
                                <li>GI?? TI???N</li>
                            @endif
                            <li>M?? s???n ph???m</li>
                            <li>Tr???ng th??i</li>
                        </ul>
                        <ul class="sub">
                            @if($product->discount != null)
                                <li class="price">{{$product->price}}VND</li>
                                <li>{{$product->discount}}</li>
                            @else
                                <li class="price">{{$product->price}}VND</li>
                            @endif
                            <li>D243321</li>
                            <li>??ang c?? s???n</li>
                        </ul>
                    </div>
                    <div class="short-preview">
                        <h3>M?? T??? NG???N</h3>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="btn-cart">
                        <a href="./cart/add/{{$product->id}}">BUY NOW</a>
                    </div>
                </div>
            </div>

        </section>
        <section class="product__selection pro-details_another">
            <div class="container">
                <h3>C??C S???N PH???M KH??C</h3>
                <div class="product__selection-grid">
                    @foreach($relatedProducts as $relatedProduct)
                        <div class="selection">
                        <div class="selection-container">
                            <div class="selection-img">
                                <img src="front/img/product/detail/{{$relatedProduct->productImage[0]->path}}" alt="" style="height: 100%;overflow: hidden">
                            </div>
                            <h4 class="selection-title">
                                ${{$relatedProduct->name}}
                            </h4>
                            <div class="selection-price">
                                <p>Gi??</p>
                                <p>:</p>
                                <div class="price">
                                    ${{$relatedProduct->price}}
                                </div>
                            </div>
                            <div class="selection-detail">
                                <a href="shop/product/{{$relatedProduct->id}}">
                                    <img src="./img/product/arrow.png" alt="">
                                    <p>CHI TI???T</p>
                                </a>
                            </div>
                        </div>

                    </div>
                    @endforeach
{{--                    <div class="selection section-border">--}}
{{--                        <div class="selection-container">--}}
{{--                            <div class="selection-img">--}}

{{--                            </div>--}}
{{--                            <h4 class="selection-title">--}}
{{--                                Gh??? g??? so??i lo???i 1--}}
{{--                            </h4>--}}
{{--                            <div class="selection-price">--}}
{{--                                <p>Gi??</p>--}}
{{--                                <p>:</p>--}}
{{--                                <div class="price">--}}
{{--                                    700.000 VND--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="selection-detail">--}}
{{--                                <a href="">--}}
{{--                                    <img src="./img/product/arrow.png" alt="">--}}
{{--                                    <p>CHI TI???T</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="selection">--}}
{{--                        <div class="selection-container">--}}
{{--                            <div class="selection-img">--}}

{{--                            </div>--}}
{{--                            <h4 class="selection-title">--}}
{{--                                Gh??? g??? so??i lo???i 1--}}
{{--                            </h4>--}}
{{--                            <div class="selection-price">--}}
{{--                                <p>Gi??</p>--}}
{{--                                <p>:</p>--}}
{{--                                <div class="price">--}}
{{--                                    700.000 VND--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="selection-detail">--}}
{{--                                <a href="">--}}
{{--                                    <img src="./img/product/arrow.png" alt="">--}}
{{--                                    <p>CHI TI???T</p>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="product__selection-click">
                        <span></span>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
