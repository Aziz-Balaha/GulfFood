<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تواصل معنا</title>
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
                <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">تواصل معنا</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">الرئيسية</a></li>
                    <li class="active"><span class="fa fa-chevron-left mx-2" aria-hidden="true"></span>تواصل معنا</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <!-- contact -->
    <section class="w3l-contact-info-main" id="contact">
        <div class="contact-sec py-5">
            <div class="container py-md-4 py-3">
                <div class="contact-w3pvt-form">
                    <h3 class="title-big mb-5" style="text-align:right">ابقى على تواصل</h3>
{{--                    {{route('mail')}}--}}
                    <form method="post" class="w3layouts-contact-fm" action="{{route('mail')}}">
                        @csrf
                        <div class="row main-cont-sec">
                            <div class="col-md-6 left-cont-contact">
                                <div class="form-group">
                                    <label for="fname" style="text-align:right">الاسم الأول</label>
                                    <input class="form-control" type="text" name="fname" id="fname" placeholder=""
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="lname" style="text-align:right">الاسم الأخير</label>
                                    <input class="form-control" type="text" name="lname" id="lname" placeholder=""
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label for="email" style="text-align:right">البريد الإلكتروني</label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-md-6 right-cont-contact mt-md-0 mt-1">
                                <div class="form-group">
                                    <label for="message" style="text-align:right">نص الرسالة</label>
                                    <textarea class="form-control" name="message" id="message" placeholder=""
                                        required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mt-4">
                            <button type="submit" id="send" name="send" class="btn button-style d-flex ml-auto">إرسال</button>
                        </div>
                    </form>
{{--                    <iframe class="map-w3layouts"--}}
{{--                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509162.831475898!2d-123.79818215689443!3d37.19305185672543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1535716535953"--}}
{{--                        allowfullscreen></iframe>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    <!-- section divide border style -->
    <div class="border-sec">
    </div>
    <!-- //section divide border style -->
    @include('front.includes.footer')
    @include('front.includes.AppJS')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $('#send').click(function (e) {
        swal({
            title: "تم ارسال الرسالة",
            text: "سيتم الرد عليك قريبا",
            icon: "success",
        });
    });
</script>
</body>

</html>
