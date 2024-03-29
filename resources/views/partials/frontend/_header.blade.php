<!-- Header -->
<header>
    <div class="d-none d-md-block">
        <!-- Header desktop STILL -->
        {{-- <nav class="container-header-desktop" id="header-still">
            <!-- Logo desktop -->
            <div class="wrap-menu-desktop">
                <div class="limiter-menu-desktop container">
                    <a href="{{ route('home') }}" style="margin: 0 auto 0; margin-top: -100px">
        <img src="{{ asset('images/marc/about/Marcs Website components-14.png') }}" alt="LOGO" height="50">
        </a>
        <!-- Menu desktop -->
        <div class="menu-desktop w-100" style="position: absolute; left: 0;">
            <ul class="main-menu respon-sub-menu" style="margin: 0 auto 0;">
                <li>
                    <a class="custom-font-1 menu-font-style" href="{{ route('home') }}"
                        @if(Route::currentRouteName()=='home' )
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>HOME</a>
                </li>
                <li>
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.about') }}"
                        @if(Route::currentRouteName()=='frontend.about' )
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>ABOUT</a>

                </li>

                <li>
                    @if(Route::currentRouteName() == 'frontend.district' ||
                    Route::currentRouteName() == 'frontend.paul.introduction' ||
                    Route::currentRouteName() == 'frontend.paul.prives' ||
                    Route::currentRouteName() == 'frontend.paul.lanes')
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}"
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;">DISTRICT <i
                            class="fa fa-chevron-down"></i></a>
                    @else
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.district') }}">DISTRICT <i
                            class="fa fa-chevron-down"></i></a>
                    @endif
                    <ul class="sub-menu" style="z-index:9999;">
                        <li><a href="{{ route('frontend.paul.introduction') }}" class="custom-font-1">PAUL
                                MARC</a></li>
                        <li><a href="#" class="custom-font-1 disabled-link">DEAN MARC</a></li>
                        <li><a href="#" class="custom-font-1 disabled-link">GRANT MARC</a></li>
                        <li><a href="#" class="custom-font-1 disabled-link">WILL MARC</a></li>
                        <li><a href="#" class="custom-font-1 disabled-link">OLENN MARC</a></li>
                    </ul>
                </li>

                <li>
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.developer') }}"
                        @if(Route::currentRouteName()=='frontend.developer' )
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>DEVELOPER</a>
                </li>

                <li>
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.masterplan') }}"
                        @if(Route::currentRouteName()=='frontend.masterplan' )
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>MASTERPLAN</a>
                </li>

                <li>
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.partners') }}"
                        @if(Route::currentRouteName()=='frontend.partners' )
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>PARTNERS</a>
                </li>

                <li>
                    <a class="custom-font-1 menu-font-style" href="{{ route('frontend.contact_us') }}"
                        style="padding-right: 20px !important;" @if(Route::currentRouteName()=='frontend.contact_us' )
                        style="border-bottom: 1px solid #000; padding-bottom: 10px;" @endif>CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </nav> --}}

    <!-- Header desktop STICKY -->
    <nav class="container-header-desktop" id="header-sticky">
        <div class="wrap-menu-desktop" style="background-color: rgba(0,0,0,1) !important;">
            <div class="limiter-menu-desktop container-fluid">
                <!-- Logo desktop -->
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/escalier/logo-escalier-header-trans.png') }}" alt="LOGO"
                             class="ml-md-5"
                            style="width: 150px; height: auto;">
                    </a>
                </div>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu respon-sub-menu" style="margin-right:100px !important">
                        <li>
                            <a class="custom-font-avenir-light menu-font-style text-white" href="{{ route('home') }}">
                                <div class="text-white">HOME</div>
                            </a>
                        </li>
                        <li class="ml-5">
                            <a class="custom-font-avenir-light menu-font-style text-white"
                                href="{{ route('frontend.portfolio') }}">
                                <div class="text-white">PORTFOLIO</div>
                            </a>
                        </li>
                        <li class="ml-5">
                            <a class="custom-font-avenir-light menu-font-style text-white" href="{{ route('frontend.contact') }}">
                                <div class="text-white">CONTACT US</div>
                            </a>
                        </li>
                        <li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    </div>



    <!-- Header Mobile -->
    <nav class="container-header-mobile">
        <div class="wrap-header-mobile" style="background-color: black !important;">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="{{ route('home') }}"><img src="{{ asset('images/escalier/logo-escalier-header.png') }}"
                        alt="LOGO"></a>
            </div>


            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>

        <div class="menu-mobile">

            <ul class="main-menu" style="background-color: #000 !important;">
                <li>
                    <a class="custom-font-avenir-light text-white" href="{{ route('home') }}">HOME</a>
                </li>

                <li>
                    <a class="custom-font-avenir-light text-white" href="{{ route('frontend.portfolio') }}">PORTFOLIO</a>
                </li>

                <li>
                    <a class="custom-font-avenir-light text-white" href="{{ route('frontend.contact') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
