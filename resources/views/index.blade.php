@extends('layouts.app')

@section('content')

	<!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <!--Carousel Wrapper-->
            <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!-- First slide -->
                    <div class="carousel-item active">
                        <!--Mask color-->
                        <div class="view">
                            <!--Video source-->
                            <video class="video-fluid video-fluid1" autoplay loop muted>
                                <source src="{{ asset('assets/videos/men_video.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="mask rgba-indigo-light"></div>
                        </div>
                    </div>
                    <!-- /.First slide -->

                    <!-- Second slide -->
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <!--Video source-->
                            <video class="video-fluid video-fluid1" autoplay loop muted>
                                <source src="{{ asset('assets/videos/women_video.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="mask rgba-purple-slight"></div>
                        </div>
                    </div>
                    <!-- /.Second slide -->

                    <!-- Third slide -->
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <!--Video source-->
                            <video class="video-fluid video-fluid1" autoplay loop muted>
                                <source src="{{ asset('assets/videos/kid_video.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="mask rgba-black-strong"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <!--Video source-->
                            <video class="video-fluid video-fluid1" autoplay loop muted>
                                <source src="{{ asset('assets/videos/parfume_video.mp4') }}" type="video/mp4" />
                            </video>
                            <div class="mask rgba-purple-slight"></div>
                        </div>
                    </div>
                    <!-- /.Third slide -->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--Carousel Wrapper-->
        </div>
    </section>

    <!-- Banner -->
    <div class="body">
        <div id="featured">
            <div class="sec-banner  p-t-80 p-b-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                            <!-- Block1 -->
                            <div class="block1 wrap-pic-w">
                                <img src="{{ asset('assets/images/banner-01.jpg') }}" alt="IMG-BANNER">

                                <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                    <div class="block1-txt-child1 flex-col-l">
                                        <span class="block1-name ltext-102 trans-04 p-b-8">
                                            Women
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            Spring 2018
                                        </span>
                                    </div>

                                    <div class="block1-txt-child2 p-b-4 trans-05">
                                        <div class="block1-link stext-101 cl0 trans-09">
                                            Shop Now
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                            <!-- Block1 -->
                            <div class="block1 wrap-pic-w">
                                <img src="{{ asset('assets/images/banner-02.jpg') }}" alt="IMG-BANNER">

                                <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                    <div class="block1-txt-child1 flex-col-l">
                                        <span class="block1-name ltext-102 trans-04 p-b-8">
                                            Men
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            Spring 2018
                                        </span>
                                    </div>

                                    <div class="block1-txt-child2 p-b-4 trans-05">
                                        <div class="block1-link stext-101 cl0 trans-09">
                                            Shop Now
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                            <!-- Block1 -->
                            <div class="block1 wrap-pic-w">
                                <img src="{{ asset('assets/images/banner-03.jpg') }}" alt="IMG-BANNER">

                                <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                    <div class="block1-txt-child1 flex-col-l">
                                        <span class="block1-name ltext-102 trans-04 p-b-8">
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            New Trend
                                        </span>
                                    </div>

                                    <div class="block1-txt-child2 p-b-4 trans-05">
                                        <div class="block1-link stext-101 cl0 trans-09">
                                            Shop Now
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="small-jum" >
        <div class="sec-banner  p-t-10 p-b-50">
            <div class="container">
                <div class="jumbotron">
                    <h2 class="text-center color-works">Our Plan</h2>
                    <div class="works_system">
                        <h3 class="plan_text text-center">Our Plan to help the consumers and to sell good products </h3>
                    </div>
                    <div class="row">

                        <div class="col-md-4 change-boot">
                            <img  class="img_size_plan" src="{{ asset('assets/1/images/logo/LogoMakr_2kWBRg.png') }}" alt="">
                            <div class="style_plan">
                                <h3 class="plan_h3">Choose style</h3>
                                <p class="plan_paragraph "> Choose a shirt from the models. </p>
                            </div>

                        </div>
                        <div class="col-md-4 change-boot"><img class="img_size_plan" src="{{ asset('assets/1/images/logo/LogoMakr_7F6bXZ.png') }}" alt="">
                            <div class="style_plan">
                                <h3 class="plan_h3">Find the Size</h3>
                                <p class="plan_paragraph ">Let to find any size of facric. </p>
                            </div>
                        </div>
                        <div class="col-md-4 change-boot"><img class="img_size_plan" src="{{ asset('assets/1/images/logo/LogoMakr_7lwEUT.png') }}" alt="">
                            <div class="style_plan">
                                <h3 class="plan_h3">Order any Products</h3>
                                <p class="plan_paragraph ">Buy everything and anytime. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Product -->

    <div class="body2">
        <div class="featured2">
            <section class="p-t-23 p-b-140">
                <div class="container">
                    <div class="p-b-10">
                        <h3 class="ltext-103 cl5">
                        Product Overview
                        </h3>
                    </div>


                    <section class="section-margin calc-60px">
                        <div class="container">
                            <div class="owl-carousel owl-theme" id="bestSellerCarousel">

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-01.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-02.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>
                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-04.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-05.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-06.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-07.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>

                                <div class="card text-center card-product">
                                    <div class="card-product__img block2-pic hov-img0">
                                        <img class="img-fluid" src="{{ asset('assets/images/product-08.jpg') }}" alt="IMG-PRODUCT">
                                        <ul class="card-product__imgOverlay">
                                            <li><button><i class="ti-search"></i></button></li>
                                            <li><button><i class="ti-shopping-cart"></i></button></li>
                                            <li><button><i class="ti-heart"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <p>Accessories</p>
                                        <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
                                        <p class="card-product__price">$150.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>





                </div>
            </section>
        </div>
    </div>
    <div class="header3">
        <div class="site-main">

            <section class="blog">
                <div class="container">
                    <div class="section-intro pb-60px">
                        <h2>Latest News</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card card-blog">
                                <div class="card-blog__img">
                                    <img class="card-img rounded-0" src="{{ asset('assets/images/banner-02.jpg') }}" alt="">
                                </div>
                                <div class="card-body">
                                    <ul class="card-blog__info">
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                    </ul>
                                    <h4 class="card-blog__title"><a href="single-blog.html">The Richland Center Shooping News and weekly shooper</a></h4>
                                    <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                                    <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card card-blog">
                                <div class="card-blog__img">
                                    <img class="card-img rounded-0" src="{{ asset('assets/images/banner-02.jpg') }}" alt="">
                                </div>
                                <div class="card-body">
                                    <ul class="card-blog__info">
                                        <li><a href="123">By Admin</a></li>
                                        <li><a href=""><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                    </ul>
                                    <h4 class="card-blog__title"><a href="single-blog.html">The Shopping News also offers top-quality printing services</a></h4>
                                    <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                                    <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="card card-blog">
                                <div class="card-blog__img">
                                    <img class="card-img rounded-0" src="{{ asset('assets/images/banner-02.jpg') }}" alt="">
                                </div>
                                <div class="card-body">
                                    <ul class="card-blog__info">
                                        <li><a href="#">By Admin</a></li>
                                        <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                                    </ul>
                                    <h4 class="card-blog__title"><a href="single-blog.html">Professional design staff and efficient equipment you’ll find we offer</a></h4>
                                    <p>Let one fifth i bring fly to divided face for bearing divide unto seed. Winged divided light Forth.</p>
                                    <a class="card-blog__link" href="#">Read More <i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================ Blog section end ================= -->
        </div>
    </div>
    <div class="brands-area d-flex align-items-center justify-content-between">
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset('assets/img/core-img/brand1.png') }}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset('assets/img/core-img/brand2.png') }}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset('assets/img/core-img/brand3.png') }}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset('assets/img/core-img/brand4.png') }}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset('assets/img/core-img/brand5.png') }}" alt="">
        </div>
        <!-- Brand Logo -->
        <div class="single-brands-logo">
            <img src="{{ asset('assets/img/core-img/brand6.png') }}" alt="">
        </div>
    </div>

@endsection
