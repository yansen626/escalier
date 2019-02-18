<!-- Header -->
<header class="header-v3">
    <!-- Header desktop -->
    <nav class="container-header-desktop">
        <!-- Logo desktop -->
        <div class="wrap-menu-desktop">
            <div class="limiter-menu-desktop container">
                <a href="{{ route('home') }}" style="margin-top: -100px">
                    <img src="{{ asset('images/marc/about/Marcs Website components-14.png') }}" alt="LOGO" height="50" >
                </a>
                <!-- Menu desktop -->
                <div class="menu-desktop" style="position: absolute;">
                    <ul class="main-menu respon-sub-menu left">
                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('home') }}">HOME</a>
                        </li>
                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.about') }}">ABOUT</a>
                        </li>

                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}">DISTRICT</a>
                        </li>

                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.developer') }}">DEVELOPER</a>
                        </li>
                    </ul>

                    <ul class="main-menu respon-sub-menu right">
                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.masterplan') }}">MASTERPLAN</a>
                        </li>

                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.partners') }}">PARTNERS</a>
                        </li>

                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.contact_us') }}">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ route('home') }}"><img src="{{ asset('images/marc/about/Marcs Website components-14.png') }}" alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>

        <div class="menu-mobile">
            {{--<ul class="top-bar-m p-l-20 p-tb-8">--}}
                {{--<li>--}}
                    {{--<div class="t1-s-1 cl-5 p-tb-3">--}}
							{{--<span class="fs-16 m-r-6">--}}
								{{--<i class="fa fa-home" aria-hidden="true"></i>--}}
							{{--</span>--}}
                        {{--<span>379 5Th Ave New York, Nyc 10018</span>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<div class="t1-s-1 cl-5 p-tb-3">--}}
							{{--<span class="fs-16 m-r-6">--}}
								{{--<i class="fa fa-phone" aria-hidden="true"></i>--}}
							{{--</span>--}}
                        {{--<span>(+1) 96 716 6879</span>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<div class="t1-s-1 cl-5 p-tb-3">--}}
							{{--<span class="fs-16 m-r-6">--}}
								{{--<i class="fa fa-clock-o" aria-hidden="true"></i>--}}
							{{--</span>--}}
                        {{--<span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<div>--}}
                        {{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
                            {{--<i class="fa fa-facebook-official"></i>--}}
                        {{--</a>--}}

                        {{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
                            {{--<i class="fa fa-twitter"></i>--}}
                        {{--</a>--}}

                        {{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
                            {{--<i class="fa fa-google-plus"></i>--}}
                        {{--</a>--}}

                        {{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
                            {{--<i class="fa fa-instagram"></i>--}}
                        {{--</a>--}}

                        {{--<a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">--}}
                            {{--<i class="fa fa-linkedin"></i>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}

            <ul class="main-menu" style="background-color: #000 !important;">
                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.about') }}">ABOUT</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.district') }}">DISTRICT</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.developer') }}">DEVELOPER</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.masterplan') }}">MASTERPLAN</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.partners') }}">PARTNERS</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.contact_us') }}">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</header>