<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>شركة الخليج للصناعات الغذائية</title>
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
    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="w3l-content-photo-5">
            <div class="content pb-5 pt-md-5 pt-4">
                <div class="container py-lg-4 py-md-3">
                    <div class="row">
                        <div class="col-lg-6 content-photo">
                            <a href="#image"><img src="{{asset('assets/images/logo.png')}}" class="img-responsive"
                                                  alt=""></a>
                        </div>
                        <div class="col-lg-6 content-left mb-md-0 mb-3">
                            <h3>مرحبا بك في موقع
                                <br>
                                <span>شركة الخليج للصناعات الغذائية</span></h3>
                            <p>تم إنشاء شركة الخليج للصناعات الغذائية في عام 2011، وهي تختص في صناعة الألبان والأجبان والسلطات ومن ضمنها سلطة الحمص.</p>
                            <p>مرت الشركة بعدة مراحل حيث بدأت بصناعة الأجبان البلدية واللبنة، ومن ثم تطورت إلى صناعة اللبن الرايب في عبوات ذات أحجام عائلية.</p>
                            <a class="btn button-style" href="{{route('about')}}">أعرف أكثر عنا</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->
    <!-- about section -->

    <!-- //about section -->
    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 pt-md-4 pt-1 pb-5">
            <div class="container pb-md-4 pb-3">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h3 class="title-main-2 text-center p-lg-4">مستمرون منذ أكثر من 10 أعوام. نحن نصنع الأفضل!</h3>
                    </div>
                    <div class="col-lg-7 mt-lg-0 mt-sm-5 mt-4">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="position-relative">
                                    <img src="{{asset('assets/images/team1.jpg')}}" class="img-responsive" alt="content-photo">
                                    <div class="text-position">
                                        <h4><a href="{{route('about')}}">Jimic Nasium</a></h4>
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
                <div class="content-sec-11 mt-5 pt-lg-4">
                    <div class="row">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
<p>تم إنشاء شركة الخليج للصناعات الغذائية في عام 2011، وهي تختص  في صناعة الألبان والأجبان والسلطات ومن ضمنها سلطة الحمص.</p>
                            </div>
                        </div>
                        <div class="col-md-6 columns mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>مرت الشركة بعدة مراحل حيث بدأت بصناعة الأجبان البلدية واللبنة، ومن ثم تطورت إلى صناعة اللبن الرايب في عبوات ذات أحجام عائلية.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-4">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
<p>وفي عام 2013 تمت إضافة خط إنتاج جديد لصناعة اللبن الرايب في عبوات صغيرة، وأيضا تم إنتــاج الألبـان المحلاة ومن أهمهـا الشوكو. وتسعى الشركة إلى تطوير دائم للوصول إلى أفضل جودة لمنتجاتهـا.</p>
                            </div>
                        </div>
                        <div class="col-md-6 columns  mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>وأيضا في مجال السلطات فنحن نقدم سلطات الحمص بأفضل الأنواع والتنوع في المذاق لإرضاء الزبائن .
                                    رؤية الشركة الآن هي الوصول إلى صناعة جميع منتجات الألبان والأجبان التي يحتاجها السوق المحلي بأفضل الطرق والإمكانات.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- video section -->
    <section class="video-section" id="work">
        <div class="midd-w3 py-5">
            <div class="container py-md-4 py-3">
                <div class="row">
                    <div class="col-lg-5 about-right-faq align-self">
                        <h3 class="title-big">كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام</h3>
                        <p class="mt-3">كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام</p>
                        <a class="btn button-style mt-lg-5 mt-4 popup-with-zoom-anim play-view"
                            href="#small-dialog">شاهد الفيديو
                        </a>
                    </div>
                    <div class="col-lg-7 left-wthree-img text-righ mt-lg-0 mt-5">
                        <div class="position-relative">
                            <img src="{{asset('assets/images/video.jpg')}}" alt="" class="img-fluid radius-image-full">
                            <a href="#small-dialog"
                                class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://www.youtube.com/embed/oqaZV9Oxco0" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //video section -->
    <!-- blog section -->
{{--    <section class="w3l-blog-sec py-5">--}}
{{--        <div class="services-layout py-md-4 py-3">--}}
{{--            <div class="container">--}}
{{--                <h3 class="title-big mb-4 pb-2">Blog Posts</h3>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">--}}
{{--                        <div class="services-gd">--}}
{{--                            <div class="serve-info">--}}
{{--                                <h3 class="date">21<sup>st</sup> October</h3>--}}
{{--                                <a href="#blog">--}}
{{--                                    <figure>--}}
{{--                                        <img class="img-responsive" src="{{asset('assets/images/blog1.jpg')}}" alt="blog-image">--}}
{{--                                    </figure>--}}
{{--                                </a>--}}
{{--                                <h3> <a href="#blog" class="vv-link">Nunc consequat justo id commodo--}}
{{--                                        feugiat</a>--}}
{{--                                </h3>--}}
{{--                                <ul class="admin-list">--}}
{{--                                    <li><a href="#blog"><span class="fa fa-user-circle"--}}
{{--                                                aria-hidden="true"></span>--}}
{{--                                            Admin</a></li>--}}
{{--                                    <li><a href="#blog"><span class="fa fa-heart" aria-hidden="true"></span>9--}}
{{--                                            Likes</a></li>--}}
{{--                                    <li><a href="#blog"><span class="fa fa-comments"--}}
{{--                                                aria-hidden="true"></span>9 Comments</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 column column-img mt-md-0 mt-4" id="zoomIn">--}}
{{--                        <div class="services-gd">--}}
{{--                            <div class="serve-info">--}}
{{--                                <h3 class="date">23<sup>rd</sup> October</h3>--}}
{{--                                <a href="#blog">--}}
{{--                                    <figure>--}}
{{--                                        <img class="img-responsive" src="{{asset('assets/images/blog4.jpg')}}" alt="blog-image">--}}
{{--                                    </figure>--}}
{{--                                </a>--}}
{{--                                <h3> <a href="#blog" class="vv-link">Fusce ac eros quis metus por edit--}}
{{--                                        some</a>--}}
{{--                                </h3>--}}
{{--                                <ul class="admin-list">--}}
{{--                                    <li><a href="#blog"><span class="fa fa-user-circle"--}}
{{--                                                aria-hidden="true"></span>--}}
{{--                                            Admin</a></li>--}}
{{--                                    <li><a href="#blog"><span class="fa fa-heart" aria-hidden="true"></span>9--}}
{{--                                            Likes</a></li>--}}
{{--                                    <li><a href="#blog"><span class="fa fa-comments"--}}
{{--                                                aria-hidden="true"></span>8 Comments</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-md-5 mt-4 column column-img" id="zoomIn">--}}
{{--                        <div class="services-gd">--}}
{{--                            <div class="serve-info">--}}
{{--                                <h3 class="date">1<sup>st</sup> November</h3>--}}
{{--                                <a href="#blog">--}}
{{--                                    <figure>--}}
{{--                                        <img class="img-responsive" src="{{asset('assets/images/blog3.jpg')}}" alt="blog-image">--}}
{{--                                    </figure>--}}
{{--                                </a>--}}
{{--                                <h3> <a href="#blog" class="vv-link">Cras fringilla, enim a porta--}}
{{--                                        fermentum</a>--}}
{{--                                </h3>--}}
{{--                                <ul class="admin-list">--}}
{{--                                    <li><a href="#blog"><span class="fa fa-user-circle"--}}
{{--                                                aria-hidden="true"></span>--}}
{{--                                            Admin</a></li>--}}
{{--                                    <li><a href="#blog"><span class="fa fa-heart" aria-hidden="true"></span>6--}}
{{--                                            Likes</a></li>--}}
{{--                                    <li><a href="#blog"><span class="fa fa-comments"--}}
{{--                                                aria-hidden="true"></span>9 Comments</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- //blog section -->
    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-vv-action py-5">
            <div class="container py-md-4 py-3">
                <div class="grid">
                    <div class="float-lt">
                        <h3 class="title-big">تواصل معنا</h3>
                    </div>
                    <div class="float-rt text-right">
                        <ul class="buttons">
                            <li class="phone"><span class="fa fa-volume-control-phone mr-1" aria-hidden="true" ></span>
                                <a class="call-style-w3" href="tel:+970595417279">970595417279+</a>
                            </li>
                            <li class="green">أو</li>
                            <li><a href="{{'contact'}}" class="btn button-style">ابقى على تواصل</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->
    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids">
                    <div class="col-lg-4 col-md-6">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-motorcycle" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.blade.php">مكونات طازجة</a></h5>
                            <p>كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.blade.php">مكونات طازجة</a></h5>
                            <p>كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.blade.php">مكونات طازجة</a></h5>
                            <p>كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام كلام</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->
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
    @include('front.includes.footer')
    @include('front.includes.AppJS')
</body>

</html>
