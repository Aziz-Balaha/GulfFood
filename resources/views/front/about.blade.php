<!doctype html>
<html lang="ar" dir="rtl">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>من نحن</title>
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
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">من نحن</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">الرئيسية</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>من نحن</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- about2 section -->
    <section class="w3l-about2">
        <div class="content-with-photo4-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 about-2-secs-right">
                        <img src="{{asset('assets/images/about2.png')}}" alt="" class="img-fluid img-responsive" />
                    </div>
                    <div class="col-lg-6 about-2-secs py-lg-5 pt-lg-0 pt-5">
                        <h3 class="title-big">منتجات صحية وطازجة فقط من أجلك!</h3>
                        <p>كلام عن الشركة ...............................................................
                        </p>
                        <ul>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>كلام عن الشركة ............</li>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>كلام عن الشركة ............</li>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>كلام عن الشركة ............</li>
                            <li><span class="fa fa-dot-circle-o" aria-hidden="true"></span>كلام عن الشركة ............</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //about2 section -->
    <!-- stats -->
    <section class="w3_stats py-5" id="stats">
        <div class="container py-md-4 py-3">
            <div class="w3-stats">
                <div class="row text-center">
{{--                    <div class="col-md-3 col-6">--}}
{{--                        <div class="counter">--}}
{{--                            <div class="timer count-title count-number" data-to="5100" data-speed="1500"></div>--}}
{{--                            <p class="count-text ">عدد المنتجات كذلك</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-6">--}}
{{--                        <div class="counter">--}}
{{--                            <div class="timer count-title count-number" data-to="971" data-speed="1500"></div>--}}
{{--                            <p class="count-text ">عدد العمال مثلا</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-6 mt-md-0 mt-4">--}}
{{--                        <div class="counter">--}}
{{--                            <div class="timer count-title count-number" data-to="7600" data-speed="1500"></div>--}}
{{--                            <p class="count-text ">ارقام مهمة من الشركة</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-3 col-6 mt-md-0 mt-4" style="margin: 0 auto;">
                        <div class="counter">
                            <div class="timer count-title count-number" data-to="10" data-speed="1500"></div>
                            <p class="count-text ">سنوات من الخبرة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //stats -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 py-5">
            <div class="container py-md-4 py-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="{{asset('assets/images/team1.jpg')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="about.blade.php">Jimic Nasium</a></h4>
                                        <p>Best Chef</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-sm-0 mt-4">
                                <div class="position-relative">
                                    <img src="{{asset('assets/images/team2.jpg')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="about.blade.php">Henry Itondo</a></h4>
                                        <p>Food Expert</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- big video about -->
    <section class="w3l-big-video-about video-section pb-md-5 pb-2 pt-md-4 pt-2">
        <div class="container pb-md-5 pb-3">
            <div class="position-relative">
                <img src="{{asset('assets/images/video2.jpg')}}" alt="" class="img-fluid radius-image-full">
                <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                    <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                    </span>
                </a>
                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://www.youtube.com/embed/3lL8Szf0ytc" frameborder="0" allow="autoplay; fullscreen"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- big video about -->
    <!-- promocode section -->
{{--    <section class="w3l-promocode">--}}
{{--        <div class="promo-block pt-md-0 pt-4">--}}
{{--            <div class="container">--}}
{{--                <div class="row aap-4-section">--}}
{{--                    <div class="col-lg-6 app4-right-image">--}}
{{--                        <img src="{{asset('assets/images/img3.png')}}" class="img-responsive" alt="App Device" />--}}
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
