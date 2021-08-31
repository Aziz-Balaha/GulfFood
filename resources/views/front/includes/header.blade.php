<!--header-->
<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke px-0">
{{--            <h1>--}}
{{--                <a class="navbar-brand" href="{{route('index')}}}">--}}
{{--                    <i class="fa fa-cutlery" aria-hidden="true"></i> Foodies--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--          if logo is image enable this--}}
            <div style="text-align: center">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="GulfFood" title="GulfFood" style="height:60px;" />
                    <p >مع إشراقة كل الصباح</p>
                </a>
            </div>

            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
{{--                    @php--}}

{{--                    @endphp--}}
{{--                    @foreach($links  as $link)--}}
{{--                        <li class="nav-item" {{ (request()->routeIs($link['route'])) ? 'active' : '' }}>--}}
{{--                            <a class="nav-link" href="{{route($link['route'])}}">$link['name']</a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">الرئيسية </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}"> من نحن </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="{{route('menu',['all'])}}" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            منتجاتنا
                        </a>
{{--                        <a class="nav-link" href="{{route('menu')}}"> منتجاتنا </a>--}}
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="text-align: right">
                            <a class="dropdown-item" href="{{route('menu',['all'])}}">جميع المنتجات</a>

{{--                            @foreach($categories as $category)--}}
{{--                                <a class="dropdown-item" href="{{route('menu',[$category->name])}}">$category->name</a>--}}
{{--                            @endforeach--}}

                            <a class="dropdown-item" href="{{route('menu',['سلطات'])}}">سلطات</a>
                            <a class="dropdown-item" href="{{route('menu',['ألبان'])}}">ألبان</a>
                            <a class="dropdown-item" href="{{route('menu',['أجبان'])}}">أجبان</a>
                            <a class="dropdown-item" href="{{route('menu',['حمص'])}}">حمص</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"> تواصل معنا </a>
                    </li>
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!--//header-->
