<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$product['name'] . ' - ' . $product['size'] . ' ' . $product['measruing_unit']}}</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
          rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
    <style>
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {transform: scale(0.1)}
            to {transform: scale(1)}
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
        }
    </style>
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
        <div class="container py-lg-4 py-md-3">
            <div class="row">
                <div class="col-lg-5 content-photo">
                    <img id="myImg" src="{{asset('assets/images/product/'.$product['image'])}}" class="img-responsive" alt="{{$product['name']}}">
                </div>
                <div class="col-lg-6 content-left mb-md-0 mb-3">
                    <h3><b>{{$product['name']}}</b> <span style="color: red">{{' ' . $product['size'] . ' ' . $product['measruing_unit']}}</span></h3>
                    <p>Aptent taciti sociosqu ad litora
                        conubia nostra, per inceptos himenaeos. Aenean volutpat elementum ante, id eleifend eros
                        luctus sit.</p>
                    <p>Nunc vel pellentesque. Class aptent taciti sociosqu ad litora
                        torquent per
                        conubia nostra, per inceptos himenaeos. Aenean volutpat elementum ante, id eleifend eros
                        luctus sit
                        amet. vel tincidunt erat neque non ipsum. Ut sollicitudin pharetra enim.</p>
                </div>
            </div>
        </div>
{{--        @foreach($categories as $category)--}}
{{--            <div class="another-sec">--}}
{{--                <h3 class="title-big mb-2 text-lg-center">{{$category->name}}</h3>--}}
{{--                <div class="row menu-body">--}}
{{--                    @foreach($products as $product)--}}
{{--                        @if($product->category_id == $category->id)--}}
{{--                            <div class="row menu-item col-4">--}}
{{--                                <div class="col p-0 position-relative">--}}
{{--                                    <a href="{{route('product',[$product->name])}}"><img src="{{asset('assets/images/product/'.$product->image)}}" class="img-responsive" alt="" width="80">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col">--}}
{{--                                    <div class="row no-gutters">--}}
{{--                                        <div class="col-9 menu-item-name">--}}
{{--                                            <h6>{{$product->name}}</h6>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-3 menu-item-price text-right">--}}
{{--                                            <h6>{{$product->size . ' ' . $product->measruing_unit}}</h6>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="menu-item-description">--}}
{{--                                        <p>كلام عن المنتج</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}

<!-- //menu -->
<!-- promocode section -->
<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>



<div class="border-sec"></div>
@include('front.includes.footer')
@include('front.includes.AppJS')
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>
</body>

</html>
