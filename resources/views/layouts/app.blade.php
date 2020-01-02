<!DOCTYPE html>
<html lang="en">
<head>
	<title>QaraStore</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets/1/images/logoQaraStorefav.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->






</head>
<body class="animsition">
    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="right-top-bar  flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div>
            </div>

            <div class="header1">

                <nav class="limiter-menu-desktop container ">

                    <!-- Logo desktop -->
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/1/images/logoQaraStore.png') }}" alt="IMG-LOGO">
                    </a>
                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="/">Home</a>
                            </li>


                            <li>
                                <h4 class="shop_h4">Shop</h4>
                                <ul class="sub-menu sub-menu_set">
                                    <li><a href="/man">Men's Collection </a></li>
                                    <li ><a href="/woman">Women's Collection </a></li>
                                    <li ><a href="/kid">Kid's Collection</a></li>
                                    <li ><a href="/accessory">Accessory's Collection</a></li>
                                    <!-- <li ><a href="home-03.html">Make Your  Dresses</a></li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="/blog">Blog</a>
                            </li>

                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>
                        <div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                    </div>
                </nav>

            </div>

        </div>
        <div class="navigation" id="nav_tog">
            <input type="checkbox" class="navigation_checkbox" id="navi_toggle">
            <label for="navi_toggle" class="navigation_button"><span class="navigation_icon">&nbsp;</span></label>
            <div class="navigation_background">&nbsp;</div>
            <nav class="navigation_nav">
                <div class="menu-desktop main-menu_mobile">
                    <ul class="main-menu">
                        <li class="active-menu">
                            <a href="/">Home</a>
                        </li>


                        <li>
                            <h4 class="shop_h4">Shop</h4>
                            <ul class="sub-menu sub-menu_set">
                                <li><a href="/man">Men's Collection </a></li>
                                <li ><a href="/woman">Women's Collection </a></li>
                                <li ><a href="/kid">Kid's Collection</a></li>
                                <li ><a href="/accessory">Accessory's Collection</a></li>
                                <!-- <li ><a href="home-03.html">Make Your  Dresses</a></li> -->
                            </ul>

                        </li>


                        <li>
                            <a href="/blog">Blog</a>
                        </li>



                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="flex-w flex-r-m change_mob_card" id="card_show_js">

                    <div class="icon-header-item cl0 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                </div>
            </nav>


        </div>
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img id="search_index" src="{{ asset('assets/images/icons/icon-close2.png') }}" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15">
                    <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Search...">
                </form>
            </div>
        </div>
        <div class="featured container-fluid"></div>

    </header>

    <!-- Cart -->
    <div class="wrap-header-cart  js-panel-cart">
        <div class="s-full js-hide-cart"></div>
        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">
                <span class="mtext-103 cl2">
                    Your Cart
                </span>
                <div id="card_index"  class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close" ></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('assets/images/item-cart-01.jpg') }}" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>
                            <span class="header-cart-item-info">
                                1 x $19.00
                            </span>
                        </div>
                    </li>
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('assets/images/item-cart-02.jpg') }}" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>
                            <span class="header-cart-item-info">
                                1 x $39.00
                            </span>
                        </div>
                    </li>
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="{{ asset('assets/images/item-cart-03.jpg') }}" alt="IMG">
                        </div>
                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>
                            <span class="header-cart-item-info">
                                1 x $17.00
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>
                    <div class="header-cart-buttons flex-w w-full">
                        <a href="/cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>
                        <a href="/cart" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


        @yield('content')


    	<!-- Footer -->
		<footer>
			<div class="footer-area footer-only">
				<div class="container">
					<div class="row section_gap">
						<div class="change_footer col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget tp_widgets ">
								<h3 class="footer_title large_title">Our Mission</h3>
								<p class="footer_par">
									Our main principe is to help people to buying new
									clothes and we can help to have on new collection
								</p>

							</div>
						</div>
						<div class="offset-lg-1 col-lg-2 col-md-6 change_footer col-sm-6">
							<div class="single-footer-widget tp_widgets">
								<h4 class="footer_title">Quick Links</h4>
								<ul class="list">
									<li><a href="/">Home</a></li>
									<li><a href="#">Shop</a></li>

									<li><a href="/blog">Blog</a></li>

									<li><a href="/contact">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 change_footer col-sm-6">
							<div class="single-footer-widget instafeed">
								<h4 class="footer_title">Pay methods</h4>
								<ul class="list instafeed d-flex flex-wrap">
									<li><img src="{{ asset('assets/images/icons/icon-pay-01.png') }}" alt=""></li>
									<li><img src="{{ asset('assets/images/icons/icon-pay-02.png') }}" alt=""></li>
									<li><img src="{{ asset('assets/images/icons/icon-pay-03.png') }}" alt=""></li>
									<li><img src="{{ asset('assets/images/icons/icon-pay-04.png') }}" alt=""></li>
									<li><img src="{{ asset('assets/images/icons/icon-pay-05.png') }}" alt=""></li>
									<li><img src="{{ asset('assets/images/icons/icon-pay-06.png') }}" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="offset-lg-1 change_footer col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget tp_widgets">
								<h4 class="footer_title">Contact Us</h4>
								<div class="ml-40">
									<p class="sm-head">
										<span class="fa fa-location-arrow"></span>
										Head Office
									</p>
									<p>Tashkent city, Qara-su-1</p>

									<p class="sm-head">
										<span class="fa fa-phone"></span>
										Phone Number
									</p>
									<p>
										+99890 324 85 63 <br>
										+99899 890 89 26
									</p>

									<p class="sm-head">
										<span class="fa fa-envelope"></span>
										Email
									</p>
									<p>
										mirkomil1997saitov@mail.ru <br>
										mirkomilsaitov@gmail.com
									</p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<hr>
					<div class="row d-flex">
						<p class="col-lg-12 footer-text text-center">
						Copyright &copy; All rights reserved </p>
						<a href="index.html" class="logo_footer">
							<img src="{{ asset('assets/1/images/logoQaraStore.png') }}" alt="IMG-LOGO">
						</a>
					</div>
				</div>
			</div>

		</footer>
		<!-- Back to top -->
		<div class="btn-back-to-top" id="myBtn">
			<span class="symbol-btn-back-to-top">
				<i class="zmdi zmdi-chevron-up"></i>
			</span>
		</div>

		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
		<!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/skrollr.min.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/jquery.ajaxchimp.min.js') }}"></script>
		<!--===============================================================================================-->
        <script src="{{ asset('assets/js/main.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
		<!--===============================================================================================-->
		<script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/js/slick-custom.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/parallax100/parallax100.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
        <!--===============================================================================================-->
        <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
        <!--===============================================================================================-->
        <script>
			$(".js-select2").each(function(){
				$(this).select2({
					minimumResultsForSearch: 20,
					dropdownParent: $(this).next('.dropDownSelect2')
				});
			})
        </script>
        <!--===============================================================================================-->
        <script>
			$('.js-pscroll').each(function(){
				$(this).css('position','relative');
				$(this).css('overflow','hidden');
				var ps = new PerfectScrollbar(this, {
					wheelSpeed: 1,
					scrollingThreshold: 1000,
					wheelPropagation: false,
				});
				$(window).on('resize', function(){
					ps.update();
				})
			});
		</script>
        <!--===============================================================================================-->
        <script>
            $('.parallax100').parallax100();
        </script>
         <!--===============================================================================================-->
        <script>
            $('.gallery-lb').each(function() { // the containers for all your galleries
                $(this).magnificPopup({
                    delegate: 'a', // the selector for gallery item
                    type: 'image',
                    gallery: {
                        enabled:true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        </script>
        <!--===============================================================================================-->
        <script>
            $('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
                e.preventDefault();
            });

            $('.js-addwish-b2').each(function(){
                var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-b2');
                    $(this).off('click');
                });
            });

            $('.js-addwish-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");

                    $(this).addClass('js-addedwish-detail');
                    $(this).off('click');
                });
            });

            /*---------------------------------------------*/

            $('.js-addcart-detail').each(function(){
                var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });

        </script>
      <!--===============================================================================================-->
	</body>
</html>
