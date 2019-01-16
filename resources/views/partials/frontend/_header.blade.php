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
                            <a href="{{ route('frontend.about') }}">ABOUT</a>
                        </li>

                        <li>
                            <a href="{{ route('frontend.district') }}">DISTRICT</a>
                        </li>

                        <li>
                            <a href="{{ route('frontend.developer') }}">DEVELOPER</a>
                        </li>
                    </ul>

                    <ul class="main-menu respon-sub-menu right">
                        <li>
                            <a href="{{ route('frontend.masterplan') }}">MASTERPLAN</a>
                        </li>

                        <li>
                            <a href="{{ route('frontend.partners') }}">PARTNERS</a>
                        </li>

                        <li>
                            <a href="{{ route('frontend.contact_us') }}">CONTACT</a>
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
            <ul class="top-bar-m p-l-20 p-tb-8">
                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-home" aria-hidden="true"></i>
							</span>
                        <span>379 5Th Ave New York, Nyc 10018</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</span>
                        <span>(+1) 96 716 6879</span>
                    </div>
                </li>

                <li>
                    <div class="t1-s-1 cl-5 p-tb-3">
							<span class="fs-16 m-r-6">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</span>
                        <span>Mon-Sat 09:00 am - 17:00 pm/Sunday CLOSE</span>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-facebook-official"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-google-plus"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-16 cl-5 hov-link2 trans-02 m-r-15">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Homepage v1</a></li>
                        <li><a href="home-02.html">Homepage v2</a></li>
                        <li><a href="home-03.html">Homepage v3</a></li>
                    </ul>
                </li>

                <li>
                    <a href="about.html">About Us</a>
                </li>

                <li>
                    <a href="services-list.html">Services</a>
                    <ul class="sub-menu">
                        <li><a href="services-list.html">Services List</a></li>
                        <li>
                            <a href="#">Services Detail</a>

                            <ul class="sub-menu">
                                <li><a href="services-detail-01.html">Services Detail v1</a></li>
                                <li><a href="services-detail-02.html">Services Detail v2</a></li>
                                <li><a href="services-detail-03.html">Services Detail v3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="news-grid.html">News</a>
                    <ul class="sub-menu">
                        <li><a href="news-grid.html">News Grid</a></li>
                        <li><a href="news-list.html">News List</a></li>
                        <li><a href="news-detail.html">News Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="projects-grid.html">Projects</a>
                    <ul class="sub-menu">
                        <li><a href="projects-grid.html">Projects Grid</a></li>
                        <li>
                            <a href="#">Projects Detail</a>

                            <ul class="sub-menu">
                                <li><a href="projects-detail-01.html">Projects Detail v1</a></li>
                                <li><a href="projects-detail-02.html">Projects Detail v2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>