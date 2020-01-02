@extends('layouts.app')

@section('content')
<div class="body2_men_2">
    <div class="featured2_men_2">


<video autoplay muted loop class="video-fluid video-fluid_men" >
    <source src="{{ asset('assets/videos/women_video.mp4') }}" type="video/mp4">
  </video>



<div class="body2_men">
    <div class="featured2_men">

        <section class="p-t-23">
            <div class="container">
                <div class="p-b-10">
                    <h3 class="ltext-103 cl5">
                        Women's Collection
                    </h3>
                </div>





                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <button class="stext-106 cl5 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                            All Products
                        </button>

                        <button class="stext-106 cl5 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
                            Bag
                        </button>

                        <button class="stext-106 cl5 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
                            Shoes
                        </button>

                        <button class="stext-106 cl5 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
                            Watches
                        </button>
                    </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col md-3">

                                        <div class="flex-c-m stext-106 cl5 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                                                 Sort By
                                            </div>
                                            <div class="dis-none panel-filter w-full p-t-10">
                                            <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

                                                    <ul>
                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                                                Default
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                Popularity
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                Average rating
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04 ">
                                                                Newness
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                Price: Low to High
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                Price: High to Low
                                                            </a>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>

                                        <!-- price -->
                                          <div class="flex-c-m stext-106 cl5 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-price">
                                                Price
                                            </div>
                                            <div class="dis-none panel-price w-full p-t-10">
                                            <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

                                                    <ul>
                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                                               All
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                $0.00-$50.00
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                 $50.00-$100.00
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04 ">
                                                                    $100.00-$150.00
                                                            </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                    $150.00-$250.00
                                                                </a>
                                                        </li>

                                                        <li class="p-b-6">
                                                            <a href="#" class="filter-link stext-106 trans-04">
                                                                    $250.00+
                                                            </a>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>

                                        <!-- color -->
                                        <div class="flex-c-m stext-106 cl5 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-color">
                                                Colors
                                            </div>
                                            <div class="dis-none panel-color w-full p-t-10">
                                            <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

                                                    <ul>
                                                            <li class="p-b-6">
                                                                    <span class="fs-15 lh-12 m-r-6" style="color: rgba(88,66,98,15);">
                                                                        <i class="zmdi zmdi-circle"></i>
                                                                    </span>

                                                                    <a href="#" class="filter-link stext-106 trans-04">
                                                                       All
                                                                    </a>
                                                                </li>
                                                            <li class="p-b-6">
                                                                <span class="fs-15 lh-12 m-r-6" style="color: #222;">
                                                                    <i class="zmdi zmdi-circle"></i>
                                                                </span>

                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                    Black
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
                                                                    <i class="zmdi zmdi-circle"></i>
                                                                </span>

                                                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                                                    Blue
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
                                                                    <i class="zmdi zmdi-circle"></i>
                                                                </span>

                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                    Grey
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
                                                                    <i class="zmdi zmdi-circle"></i>
                                                                </span>

                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                    Green
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
                                                                    <i class="zmdi zmdi-circle"></i>
                                                                </span>

                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                    Red
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <span class="fs-15 lh-12 m-r-6" style="color: #fff;">
                                                                    <i class="zmdi zmdi-circle-o"></i>
                                                                </span>

                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                    White
                                                                </a>
                                                            </li>
                                                        </ul>
                                            </div>
                                        </div>

                                        <!-- brands -->
                                        <div class="flex-c-m stext-106 cl5 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-brand">
                                                Brands
                                            </div>
                                            <div class="dis-none panel-brand w-full p-t-10">
                                            <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

                                                    <ul>
                                                            <li class="p-b-6">
                                                                <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                                                   All
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                   Zara
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                     Adidas
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <a href="#" class="filter-link stext-106 trans-04 ">
                                                                        Nike
                                                                </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                       Puma
                                                                    </a>
                                                            </li>

                                                            <li class="p-b-6">
                                                                <a href="#" class="filter-link stext-106 trans-04">
                                                                        Bershka
                                                                </a>
                                                            </li>
                                                        </ul>
                                            </div>
                                        </div>


                        </div>
                        <div class="col-md-9">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="/product_detail" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="/product_detail" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="/product_detail" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="/product_detail" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="product-detail.html" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="product-detail.html" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="product-detail.html" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item men">
                                            <!-- Block2 -->
                                            <div class="block2">
                                                <div class="block2-pic hov-img0">
                                                    <img src="{{ asset('assets/images/product-03.jpg') }}" alt="IMG-PRODUCT">
                                                    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Add to card
                                                        </a>

                                                </div>

                                                <div class="block2-txt flex-w flex-t p-t-14">
                                                    <div class="block2-txt-child1 flex-col-l ">
                                                        <a href="product-detail.html" class="stext-104 cl5 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                                See more detail
                                                        </a>

                                                        <span class="stext-105 cl5">
                                                            $25.50
                                                        </span>
                                                    </div>

                                                    <div class="block2-txt-child2 flex-r p-t-3">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                            <img class="icon-heart1 dis-block trans-04" src="{{ asset('assets/images/icons/icon-heart-01.png') }}" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('assets/images/icons/icon-heart-02.png') }}" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <nav aria-label="navigation ">
                                            <ul class="pagination  mt-50 mb-70">
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="#">21</a></li>
                                                <li class="page-item"><a class="page-link" href="#">22</a></li>
                                                <li class="page-item"><a class="page-link" href="#">23</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>
                                        </nav>

                                </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

</div>
</div>


</div>
</div>

@endsection

