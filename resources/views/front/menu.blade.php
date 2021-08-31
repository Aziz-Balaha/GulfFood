<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>منتجاتنا</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
</head>

<body>
@include('front.includes.header')
    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">منتجاتنا</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">الرئيسية</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>منتجاتنا</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- menu -->
    <div class="menu-w3ls py-5" id="menu">
        <div class="container py-md-4 py-3">
{{--            <h3 class="title-big mb-2">السلطات</h3>--}}
{{--            <div class="row menu-body">--}}
{{--                <!-- Section starts: Breakfast -->--}}
{{--                <div class="col-lg-6 menu-section">--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu1.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Tomato Toast “Ricotta”</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$36</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu2.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Avocado Toast with Egg</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$28</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu3.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Nut, Banana & Seed Toast</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$18</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu4.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Berry & Yogurt Smoothie</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$76</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                </div>--}}
{{--                <!-- Section ends: Breakfast -->--}}

{{--                <!-- Section starts: Breakfast -->--}}
{{--                <div class="col-lg-6 menu-section pl-lg-5">--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu5.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Berry Breakfast Parfait</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$13</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu6.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Peanut Butter & Banana</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$32</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu7.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Quinoa Fruit Salad</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$76</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                    <!-- Item starts -->--}}
{{--                    <div class="row menu-item">--}}
{{--                        <div class="col-3 p-0 position-relative">--}}
{{--                            <img src="{{asset('assets/images/menu8.jpg')}}" class="img-responsive" alt="">--}}

{{--                        </div>--}}
{{--                        <div class="col-9 pl-4">--}}
{{--                            <div class="row no-gutters">--}}
{{--                                <div class="col-9 menu-item-name">--}}
{{--                                    <h6>Pumpkin Yogurt Parfait</h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-3 menu-item-price text-right">--}}
{{--                                    <h6>$26</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="menu-item-description">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur tredjh adipiscing elit.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Item ends -->--}}
{{--                </div>--}}
{{--                <!-- Section ends: Breakfast -->--}}
{{--            </div>--}}
@foreach($categories as $category)
        <div class="another-sec">
            <h3 class="title-big mb-2 text-lg-center">{{$category['name']}}</h3>
            <div class="row menu-body">
    @foreach($products as $product)
        @if($product['category_id'] == $category['id'])
                        <div class="row menu-item col-4">
                            <div class="col p-0 position-relative hover-overlay ripple">
                                <a href="{{route('product',[$product['id']])}}"><img src="{{asset('assets/images/product/'.$product['image'])}}" class="img-responsive" alt="" width="80" height="170">
                                </a>
                            </div>
                            <div class="col">
                                <div class="row no-gutters">
                                    <div class="col-9 menu-item-name">
                                        <h6>{{$product['name']}}</h6>
                                    </div>
                                    <div class="col-3 menu-item-price text-right">
                                        <h6>{{$product['size'] . ' ' . $product['measruing_unit']}}</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>كلام عن المنتج</p>
                                </div>
                            </div>
                        </div>
        @endif
    @endforeach
            </div>
        </div>
@endforeach

        </div>
    </div>
    <!-- //menu -->
    <!-- promocode section -->
{{--    <section class="w3l-promocode">--}}
{{--        <div class="promo-block pt-md-0 pt-4">--}}
{{--            <div class="container">--}}
{{--                <div class="row aap-4-section">--}}
{{--                    <div class="col-lg-6 app4-right-image">--}}
{{--                        <img src="assets/images/img3.png" class="img-responsive" alt="App Device" />--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">--}}
{{--                        <h6>For 30% Discount</h6>--}}
{{--                        <h4>Get Our Promocode Now</h4>--}}
{{--                        <p class="mb-4"> Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus--}}
{{--                            sapien. Proin a--}}
{{--                            diam et dui fermentum molestie vel id neque. </p>--}}
{{--                        <div class="app-4-connection">--}}
{{--                            <div class="newsletter">--}}
{{--                                <label>Never Miss a Deal From Foodies</label>--}}
{{--                                <form action="#" methos="GET" class="d-flex wrap-align">--}}
{{--                                    <input type="email" placeholder="Enter your email id" required="required" />--}}
{{--                                    <button type="submit">Get Promocode</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>--}}
{{--                            <div class="app-4-icon">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#url" title="Apple" class="app-icon apple-vv"><span class="fa fa-apple"--}}
{{--                                                aria-hidden="true"></span></a></li>--}}
{{--                                    <li><a href="#url" title="Google play" class="app-icon play-vv"><span--}}
{{--                                                class="fa fa-play" aria-hidden="true"></span></a></li>--}}
{{--                                    <li><a href="#url" title="Microsoft" class="app-icon windows-vv"><span--}}
{{--                                                class="fa fa-windows" aria-hidden="true"></span></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- //promocode section -->
<div class="border-sec"></div>
@include('front.includes.footer')
@include('front.includes.AppJS')
</body>

</html>
