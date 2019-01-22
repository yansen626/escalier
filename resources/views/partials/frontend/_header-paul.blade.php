<!-- Header -->
<header id="header_paul" class="header-v3">
    <!-- Header desktop -->
    <nav class="container-header-desktop" style="height: 150px;">

        <div class="wrap-menu-desktop mt-0 mb-0" style="height: 150px;">
            <div class="limiter-menu-desktop container">

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu respon-sub-menu left">
                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.paul.introduction') }}">INTRODUCTION</a>
                        </li>

                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('frontend.paul.lanes') }}">PROJECTS</a>
                        </li>
                    </ul>

                    <!-- Logo desktop -->
                    <a class="mx-4" href="{{ route('frontend.paul.introduction') }}">
                        <img src="{{ asset('images/paulmarc/logo.png') }}" alt="LOGO" width="200">
                    </a>

                    <ul class="main-menu respon-sub-menu right">
                        <li>
                            <a class="custom-font-1 menu-font-style" href="{{ route('home') }}">MARC'S BOULEVARD</a>
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
                <a href="{{ route('frontend.paul.introduction') }}"><img src="{{ asset('images/paulmarc/logo.png') }}" alt="LOGO"></a>
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
                    <a class="custom-font-1 text-white" href="{{ route('frontend.paul.introduction') }}">INTRODUCTION</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.paul.lanes') }}">PROJECTS</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('home') }}">MARC'S BOULEVARD</a>
                </li>

                <li>
                    <a class="custom-font-1 text-white" href="{{ route('frontend.contact_us') }}">CONTACT</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
