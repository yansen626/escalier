@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD</title>
@endsection

@section('content')

    <!-- Slide -->
    <section class="slider">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_3" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="slidingoverlayhorizontal">
                        <img src="{{ asset('images/frontend/vendor/slide-03.jpg') }}" alt="IMG-SLIDE" class="rev-slidebg">

                        <h2 class="tp-caption tp-resizeme caption-1 text-uppercase"
                            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']"

                            data-fontsize="['48', '48', '48', '38']"
                            data-lineheight="['58', '58', '58', '58']"
                            data-color="['#FFF']"
                            data-textAlign="['left', 'left', 'center', 'center']"

                            data-x="['center']"
                            data-y="['center']"
                            data-hoffset="['0', '0', '0', '0']"
                            data-voffset="['-171', '-83', '-83', '-93']"

                            data-width="['1200','992','768','480']"
                            data-height="['auto', 'auto', 'auto', 'auto']"
                            data-whitespace="['normal']"

                            data-paddingtop="[0, 0, 0, 0]"
                            data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]"
                            data-paddingleft="[15, 15, 15, 15]"

                            data-basealign="slide"
                            data-responsive_offset="off"
                        >business knowledge</h2>

                        <p class="tp-caption tp-resizeme caption-2"
                           data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-visibility="['on', 'on', 'on', 'on']"

                           data-fontsize="['30', '30', '30', '25']"
                           data-lineheight="['39', '39', '39', '39']"
                           data-color="['#FFF']"
                           data-textAlign="['left', 'left', 'center', 'center']"

                           data-x="['center']"
                           data-y="['center']"
                           data-hoffset="['0', '0', '0', '0']"
                           data-voffset="['-101', '-13', '-13', '-13']"

                           data-width="['1200','992','768','480']"
                           data-height="['auto', 'auto', 'auto', 'auto']"
                           data-whitespace="['normal']"

                           data-paddingtop="[0, 0, 0, 0]"
                           data-paddingright="[15, 15, 15, 15]"
                           data-paddingbottom="[0, 0, 0, 0]"
                           data-paddingleft="[15, 15, 15, 15]"

                           data-basealign="slide"
                           data-responsive_offset="off"
                        >
                            We stand behind your success
                        </p>

                        <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex justify-content-lg-start"
                             data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']"
                             data-y="['center']"
                             data-hoffset="['0', '0', '0', '0']"
                             data-voffset="['0', '88', '88', '88']"

                             data-width="['1200','992','768','480']"
                             data-height="['auto']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[10, 10, 10, 10]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[10, 10, 10, 10]"

                             data-basealign="slide"
                             data-responsive_offset="off"
                        >
                            <a href="projects-grid.html" class="btn1 flex-c-c">
                                Our project
                            </a>

                            <a href="about.html" class="btn2 flex-c-c">
                                Learn more
                            </a>
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-transition="slidingoverlayvertical">
                        <img src="{{ asset('images/frontend/vendor/slide-03.jpg') }}" alt="IMG-SLIDE" class="rev-slidebg">

                        <h2 class="tp-caption tp-resizeme caption-1 text-uppercase"
                            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']"

                            data-fontsize="['48', '48', '48', '38']"
                            data-lineheight="['58', '58', '58', '58']"
                            data-color="['#FFF']"
                            data-textAlign="['left', 'left', 'center', 'center']"

                            data-x="['center']"
                            data-y="['center']"
                            data-hoffset="['0', '0', '0', '0']"
                            data-voffset="['-171', '-83', '-83', '-93']"

                            data-width="['1200','992','768','480']"
                            data-height="['auto', 'auto', 'auto', 'auto']"
                            data-whitespace="['normal']"

                            data-paddingtop="[0, 0, 0, 0]"
                            data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]"
                            data-paddingleft="[15, 15, 15, 15]"

                            data-basealign="slide"
                            data-responsive_offset="off"
                        >business knowledge</h2>

                        <p class="tp-caption tp-resizeme caption-2"
                           data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-visibility="['on', 'on', 'on', 'on']"

                           data-fontsize="['30', '30', '30', '25']"
                           data-lineheight="['39', '39', '39', '39']"
                           data-color="['#FFF']"
                           data-textAlign="['left', 'left', 'center', 'center']"

                           data-x="['center']"
                           data-y="['center']"
                           data-hoffset="['0', '0', '0', '0']"
                           data-voffset="['-101', '-13', '-13', '-13']"

                           data-width="['1200','992','768','480']"
                           data-height="['auto', 'auto', 'auto', 'auto']"
                           data-whitespace="['normal']"

                           data-paddingtop="[0, 0, 0, 0]"
                           data-paddingright="[15, 15, 15, 15]"
                           data-paddingbottom="[0, 0, 0, 0]"
                           data-paddingleft="[15, 15, 15, 15]"

                           data-basealign="slide"
                           data-responsive_offset="off"
                        >
                            We stand behind your success
                        </p>

                        <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex justify-content-lg-start"
                             data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']"
                             data-y="['center']"
                             data-hoffset="['0', '0', '0', '0']"
                             data-voffset="['0', '88', '88', '88']"

                             data-width="['1200','992','768','480']"
                             data-height="['auto']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[10, 10, 10, 10]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[10, 10, 10, 10]"

                             data-basealign="slide"
                             data-responsive_offset="off"
                        >
                            <a href="projects-grid.html" class="btn1 flex-c-c">
                                Our project
                            </a>

                            <a href="about.html" class="btn2 flex-c-c">
                                Learn more
                            </a>
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-transition="boxslide">
                        <img src="{{ asset('images/frontend/vendor/slide-03.jpg') }}" alt="IMG-SLIDE" class="rev-slidebg">

                        <h2 class="tp-caption tp-resizeme caption-1 text-uppercase"
                            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:-500px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-visibility="['on', 'on', 'on', 'on']"

                            data-fontsize="['48', '48', '48', '38']"
                            data-lineheight="['58', '58', '58', '58']"
                            data-color="['#FFF']"
                            data-textAlign="['left', 'left', 'center', 'center']"

                            data-x="['center']"
                            data-y="['center']"
                            data-hoffset="['0', '0', '0', '0']"
                            data-voffset="['-171', '-83', '-83', '-93']"

                            data-width="['1200','992','768','480']"
                            data-height="['auto', 'auto', 'auto', 'auto']"
                            data-whitespace="['normal']"

                            data-paddingtop="[0, 0, 0, 0]"
                            data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]"
                            data-paddingleft="[15, 15, 15, 15]"

                            data-basealign="slide"
                            data-responsive_offset="off"
                        >business knowledge</h2>

                        <p class="tp-caption tp-resizeme caption-2"
                           data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:500px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                           data-visibility="['on', 'on', 'on', 'on']"

                           data-fontsize="['30', '30', '30', '25']"
                           data-lineheight="['39', '39', '39', '39']"
                           data-color="['#FFF']"
                           data-textAlign="['left', 'left', 'center', 'center']"

                           data-x="['center']"
                           data-y="['center']"
                           data-hoffset="['0', '0', '0', '0']"
                           data-voffset="['-101', '-13', '-13', '-13']"

                           data-width="['1200','992','768','480']"
                           data-height="['auto', 'auto', 'auto', 'auto']"
                           data-whitespace="['normal']"

                           data-paddingtop="[0, 0, 0, 0]"
                           data-paddingright="[15, 15, 15, 15]"
                           data-paddingbottom="[0, 0, 0, 0]"
                           data-paddingleft="[15, 15, 15, 15]"

                           data-basealign="slide"
                           data-responsive_offset="off"
                        >
                            We stand behind your success
                        </p>

                        <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex justify-content-lg-start"
                             data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                             data-x="['center']"
                             data-y="['center']"
                             data-hoffset="['0', '0', '0', '0']"
                             data-voffset="['0', '88', '88', '88']"

                             data-width="['1200','992','768','480']"
                             data-height="['auto']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[10, 10, 10, 10]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[10, 10, 10, 10]"

                             data-basealign="slide"
                             data-responsive_offset="off"
                        >
                            <a href="projects-grid.html" class="btn1 flex-c-c">
                                Our project
                            </a>

                            <a href="about.html" class="btn2 flex-c-c">
                                Learn more
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="bg-0 p-b-60 m-b-100 respon-6 kit-pos2">
        <div class="kit-pos2-1">
            <div class="container">


                <!--  -->
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40 pb-lg-0">
                        <div class="bg-10 h-full kit-bor1">
                            <a href="services-detail-02.html" class="hov-img0 of-hidden bg-0">
                                <img src="{{ asset('images/frontend/vendor/services-04.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-rl-20 p-t-26 p-b-20 kit-pos2-1-1">
                                <h4 class="p-b-9">
                                    <a href="services-detail-02.html" class="t1-m-1 cl-0 hov-link2 trans-02">
                                        Management Training
                                    </a>
                                </h4>

                                <p class="t1-s-2 cl-13">
                                    We support and help people increase manage-ment experience.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40 pb-lg-0">
                        <div class="bg-10 h-full kit-bor1">
                            <a href="services-detail-02.html" class="hov-img0 of-hidden bg-0">
                                <img src="{{ asset('images/frontend/vendor/services-05.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-rl-20 p-t-26 p-b-20 kit-pos2-1-1">
                                <h4 class="p-b-9">
                                    <a href="services-detail-02.html" class="t1-m-1 cl-0 hov-link2 trans-02">
                                        Business Consulting
                                    </a>
                                </h4>

                                <p class="t1-s-2 cl-13">
                                    If you are going to use a passage of Lorem Ipsum, you need to be sure
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-8 col-lg-4 p-b-40 pb-lg-0">
                        <div class="bg-10 h-full kit-bor1">
                            <a href="services-detail-02.html" class="hov-img0 of-hidden bg-0">
                                <img src="{{ asset('images/frontend/vendor/services-06.jpg') }}" alt="IMG">
                            </a>

                            <div class="p-rl-20 p-t-26 p-b-20 kit-pos2-1-1">
                                <h4 class="p-b-9">
                                    <a href="services-detail-02.html" class="t1-m-1 cl-0 hov-link2 trans-02">
                                        Financial Planning
                                    </a>
                                </h4>

                                <p class="t1-s-2 cl-13">
                                    Analysis the business plan for deployment in the market.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bg-12 flex-wr-s-st m-b-15-sr991">
        <div class="size-a-18 bg-img2 respon-3" style="background-image: url('{{ asset('images/frontend/vendor/other-03.jpg') }}');"></div>

        <div class="size-w-5 p-rl-50 p-t-42 p-b-50 respon-4">
            <!-- Title section -->
            <div class="flex-col-c-s p-b-23">
                <h3 class="t1-b-1 cl-3 m-b-11">
                    About Us
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <p class="t1-s-2 cl-6 m-b-17">
                Leave your information and email address. We will call back and advise you. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...
            </p>

            <!-- Progress -->
            <div class="wrap-progress size-w-6 w-full-sr991 p-t-10">
				<span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
					Financial Analyst
				</span>

                <div class="progress-item">
                    <div class="progress-inner txt-s-113 cl0 txt-right p-r-10" data-percent="93%"></div>
                </div>

                <span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
					Business Suports
				</span>

                <div class="progress-item">
                    <div class="progress-inner txt-s-113 cl0 txt-right p-r-10" data-percent="60%"></div>
                </div>

                <span class="dis-block t1-s-4 cl-3 p-b-8 p-t-26">
					Inverstments
				</span>

                <div class="progress-item">
                    <div class="progress-inner txt-s-113 cl0 txt-right p-r-10" data-percent="80%"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why chosse us -->
    <section class="bg-0 p-t-92 p-b-70">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Why Chosse Us
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                    <!-- Block1 -->
                    <div class="block1 trans-04">
                        <div class="block1-show trans-04">
                            <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                                <img class="symbol-dark trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-01-dark.png') }}" alt="IMG">
                                <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-01-light.png') }}" alt="IMG">
                            </div>

                            <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                                Experienced adviser
                            </h4>
                        </div>

                        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                            <p class="t1-s-2 cl-12 txt-center p-b-26">
                                Sed nec egestas diam, vitae imper-diet nisi. Vivamus cursus
                            </p>

                            <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                    <!-- Block1 -->
                    <div class="block1 trans-04">
                        <div class="block1-show trans-04">
                            <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                                <img class="symbol-dark trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-02-dark.png') }}" alt="IMG">
                                <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-02-light.png') }}" alt="IMG">
                            </div>

                            <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                                Great Ideas
                            </h4>
                        </div>

                        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                            <p class="t1-s-2 cl-12 txt-center p-b-26">
                                Sed nec egestas diam, vitae imper-diet nisi. Vivamus cursus
                            </p>

                            <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                    <!-- Block1 -->
                    <div class="block1 trans-04">
                        <div class="block1-show trans-04">
                            <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                                <img class="symbol-dark trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-03-dark.png') }}" alt="IMG">
                                <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-03-light.png') }}" alt="IMG">
                            </div>

                            <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                                Worldwide System
                            </h4>
                        </div>

                        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                            <p class="t1-s-2 cl-12 txt-center p-b-26">
                                Sed nec egestas diam, vitae imper-diet nisi. Vivamus cursus
                            </p>

                            <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-3 p-b-30">
                    <!-- Block1 -->
                    <div class="block1 trans-04">
                        <div class="block1-show trans-04">
                            <div class="block1-symbol txt-center wrap-pic-max-s m-b-23 pos-relative lh-00 trans-04">
                                <img class="symbol-dark trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-04-dark.png') }}" alt="IMG">
                                <img class="symbol-light ab-t-c op-00 trans-04" src="{{ asset('images/frontend/vendor/icons/symbol-04-light.png') }}" alt="IMG">
                            </div>

                            <h4 class="block1-title t1-m-1 text-uppercase cl-3 txt-center trans-04">
                                Security Information
                            </h4>
                        </div>

                        <div class="block1-hide flex-col-c-c p-t-8 trans-04">
                            <p class="t1-s-2 cl-12 txt-center p-b-26">
                                Sed nec egestas diam, vitae imper-diet nisi. Vivamus cursus
                            </p>

                            <a href="#" class="flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-6 bg-0 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call back -->
    <section class="bg-10 p-t-92 p-b-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-30">
                    <!-- Title section -->
                    <div class="flex-col-c-s p-b-20">
                        <h3 class="t1-b-1 cl-0 m-b-11">
                            Request A Call Back
                        </h3>

                        <div class="size-a-2 bg-0"></div>
                    </div>

                    <p class="t1-s-2 cl-0">
                        Leave your information and email address. We will call back and advise you.
                    </p>
                </div>

                <form class="col-lg-8 p-b-30 p-t-8">
                    <div class="row">
                        <div class="col-sm-6 p-b-25">
                            <div class="size-a-3">
                                <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="name" placeholder="Your Name">
                            </div>
                        </div>

                        <div class="col-sm-6 p-b-25">
                            <div class="size-a-3">
                                <input class="s-full bg-0 t1-m-2 cl-6 plh-6 p-rl-20" type="text" name="phone" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="col-sm-6 p-b-25">
                            <div class="rs1-select2 bor9 bg0">
                                <select class="js-select2" name="subject">
                                    <option>Subject</option>
                                    <option>Subject 1</option>
                                    <option>Subject 2</option>
                                    <option>Subject 3</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 p-b-25">
                            <button class="flex-c-c size-a-4 bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Project -->
    <section class="bg-12 p-t-92 p-b-60">
        <div class="p-rl-50 p-rl-15-sr1199">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Featured Projects
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-4 col-xl-4 p-b-40">
                    <div class="pos-relative wrap-pic-w">
                        <img src="{{ asset('images/frontend/vendor/project-01.jpg') }}" alt="IMG">

                        <div class="s-full ab-t-l flex-col-c-c hov-1 p-tb-30 p-rl-15">
                            <h4 class="t1-m-1 text-uppercase cl-0 txt-center m-b-25 hov-1-1">
                                System Expansion
                            </h4>

                            <a href="projects-detail-01.html" class="size-a-12 d-inline-flex flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15 m-t-20 hov-1-2">
                                Read more
                                <i class="fa fa-long-arrow-right m-l-15"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 col-xl-4 p-b-40">
                    <div class="pos-relative wrap-pic-w">
                        <img src="{{ asset('images/frontend/vendor/project-02.jpg') }}" alt="IMG">

                        <div class="s-full ab-t-l flex-col-c-c hov-1 p-tb-30 p-rl-15">
                            <h4 class="t1-m-1 text-uppercase cl-0 txt-center m-b-25 hov-1-1">
                                Training Skill
                            </h4>

                            <a href="projects-detail-01.html" class="size-a-12 d-inline-flex flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15 m-t-20 hov-1-2">
                                Read more
                                <i class="fa fa-long-arrow-right m-l-15"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 col-xl-4 p-b-40">
                    <div class="pos-relative wrap-pic-w">
                        <img src="{{ asset('images/frontend/vendor/project-03.jpg') }}" alt="IMG">

                        <div class="s-full ab-t-l flex-col-c-c hov-1 p-tb-30 p-rl-15">
                            <h4 class="t1-m-1 text-uppercase cl-0 txt-center m-b-25 hov-1-1">
                                Business Consulting
                            </h4>

                            <a href="projects-detail-01.html" class="size-a-12 d-inline-flex flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn2 trans-02 p-rl-15 m-t-20 hov-1-2">
                                Read more
                                <i class="fa fa-long-arrow-right m-l-15"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="bg-0 p-t-92 p-b-100">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Meet Our Team
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-12">
                    <!-- Slick3 -->
                    <div class="wrap-slick3">
                        <div class="wrap-arrow-slick">
                            <button class="arrow-slick prev-slick fs-36 cl-3 hov-link2 trans-02">
                                <i class="fa fa-angle-left"></i>
                            </button>

                            <button class="arrow-slick next-slick fs-36 cl-3 hov-link2 trans-02">
                                <i class="fa fa-angle-right"></i>
                            </button>
                        </div>

                        <div class="slide-slick">
                            <div class="item-slick p-rl-15 h-full">
                                <!-- Block4 -->
                                <div class="wrap-block4">
                                    <div class="block4">
                                        <div class="block4-pic">
                                            <img class="d-inline-block" src="{{ asset('images/frontend/vendor/team-05.png') }}" alt="IMG">
                                        </div>

                                        <div class="block4-text flex-col-c-c bg-11 p-all-5">
                                            <a href="#" class="t1-m-1 text-uppercase cl-0 txt-center hov-link1 trans-02 w-100 p-b-5">
                                                JESSIE GARCIA
                                            </a>

                                            <span class="t1-s-5 cl-12 txt-center">
												Sales Manager
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item-slick p-rl-15 h-full">
                                <!-- Block4 -->
                                <div class="wrap-block4">
                                    <div class="block4">
                                        <div class="block4-pic">
                                            <img class="d-inline-block" src="{{ asset('images/frontend/vendor/team-06.png') }}" alt="IMG">
                                        </div>

                                        <div class="block4-text flex-col-c-c bg-11 p-all-5">
                                            <a href="#" class="t1-m-1 text-uppercase cl-0 txt-center hov-link1 trans-02 w-100 p-b-5">
                                                Charles Sims
                                            </a>

                                            <span class="t1-s-5 cl-12 txt-center">
												CEO Company
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item-slick p-rl-15 h-full">
                                <!-- Block4 -->
                                <div class="wrap-block4">
                                    <div class="block4">
                                        <div class="block4-pic">
                                            <img class="d-inline-block" src="{{ asset('images/frontend/vendor/team-07.png') }}" alt="IMG">
                                        </div>

                                        <div class="block4-text flex-col-c-c bg-11 p-all-5">
                                            <a href="#" class="t1-m-1 text-uppercase cl-0 txt-center hov-link1 trans-02 w-100 p-b-5">
                                                ANGEL MEYER
                                            </a>

                                            <span class="t1-s-5 cl-12 txt-center">
												Supervisor
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item-slick p-rl-15 h-full">
                                <!-- Block4 -->
                                <div class="wrap-block4">
                                    <div class="block4">
                                        <div class="block4-pic">
                                            <img class="d-inline-block" src="{{ asset('images/frontend/vendor/team-08.png') }}" alt="IMG">
                                        </div>

                                        <div class="block4-text flex-col-c-c bg-11 p-all-5">
                                            <a href="#" class="t1-m-1 text-uppercase cl-0 txt-center hov-link1 trans-02 w-100 p-b-5">
                                                RON HARPER
                                            </a>

                                            <span class="t1-s-5 cl-12 txt-center">
												Representative
											</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Number -->
    <div class="parallax100 kit-overlay1 p-tb-38" style="background-image: url('{{ asset('images/frontend/vendor/bg-01.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-tb-30">
                    <div class="flex-col-c-c h-full">
						<span class="t1-b-2 cl-0 txt-center p-b-5 counter">
							450
						</span>

                        <span class="t1-m-1 cl-13 txt-center text-uppercase">
							Projects
						</span>
                    </div>
                </div>

                <div class="col-md-4 p-tb-30">
                    <div class="flex-col-c-c h-full">
						<span class="t1-b-2 cl-0 txt-center p-b-5 counter">
							205
						</span>

                        <span class="t1-m-1 cl-13 txt-center text-uppercase">
							advisor
						</span>
                    </div>
                </div>

                <div class="col-md-4 p-tb-30">
                    <div class="flex-col-c-c h-full">
						<span class="t1-b-2 cl-0 txt-center p-b-5">
							<span class="counter">95</span>%
						</span>

                        <span class="t1-m-1 cl-13 txt-center text-uppercase">
							satisfaction rate
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <section class="bg-12 p-t-92 p-b-60">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Latest From News
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <div class="bg-0 h-full">
                        <a href="news-detail.html" class="hov-img0 of-hidden">
                            <img src="{{ asset('images/frontend/vendor/news-01.jpg') }}" alt="IMG">
                        </a>

                        <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                            <h4 class="p-b-12">
                                <a href="news-detail.html" class="t1-m-1 cl-3 hov-link2 trans-02">
                                    Recruiting Managerial Staff
                                </a>
                            </h4>

                            <div class="flex-wr-s-c p-b-9">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										Nov 10 , 2017
									</span>
                                </div>

                                <div class="p-l-20 bo-l-1 bcl-12">
                                    <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                    <a href="#" class="t1-s-2 cl-11 hov-link3">
                                        Admin
                                    </a>
                                </div>
                            </div>

                            <p class="t1-s-2 cl-6 p-b-20">
                                To take a trivial example, which of us ever und takes laborious physical exercise, except to obtain some advantage from it...
                            </p>

                            <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <div class="bg-0 h-full">
                        <a href="news-detail.html" class="hov-img0 of-hidden">
                            <img src="{{ asset('images/frontend/vendor/news-02.jpg') }}" alt="IMG">
                        </a>

                        <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                            <h4 class="p-b-12">
                                <a href="news-detail.html" class="t1-m-1 cl-3 hov-link2 trans-02">
                                    Construction Investment Plan
                                </a>
                            </h4>

                            <div class="flex-wr-s-c p-b-9">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										Nov 22 , 2017
									</span>
                                </div>

                                <div class="p-l-20 bo-l-1 bcl-12">
                                    <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                    <a href="#" class="t1-s-2 cl-11 hov-link3">
                                        Admin
                                    </a>
                                </div>
                            </div>

                            <p class="t1-s-2 cl-6 p-b-20">
                                Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...
                            </p>

                            <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
                    <div class="bg-0 h-full">
                        <a href="news-detail.html" class="hov-img0 of-hidden">
                            <img src="{{ asset('images/frontend/vendor/news-03.jpg') }}" alt="IMG">
                        </a>

                        <div class="bg-0 p-rl-28 p-t-26 p-b-35">
                            <h4 class="p-b-12">
                                <a href="news-detail.html" class="t1-m-1 cl-3 hov-link2 trans-02">
                                    System Security Upgrade
                                </a>
                            </h4>

                            <div class="flex-wr-s-c p-b-9">
                                <div class="p-r-20">
                                    <i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

                                    <span class="t1-s-2 cl-7">
										Nov 30 , 2017
									</span>
                                </div>

                                <div class="p-l-20 bo-l-1 bcl-12">
                                    <i class="fs-14 cl-7 fa fa-user m-r-2"></i>

                                    <a href="#" class="t1-s-2 cl-11 hov-link3">
                                        Admin
                                    </a>
                                </div>
                            </div>

                            <p class="t1-s-2 cl-6 p-b-20">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus...
                            </p>

                            <a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-0 p-t-92 p-b-90">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    Testimonials
                </h3>

                <div class="size-a-2 bg-3"></div>
            </div>

            <!--  -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <!-- Slick2 -->
                    <div class="wrap-slick2 rs1-slick2">
                        <div class="slide-slick">
                            <div class="item-slick p-rl-15">
                                <div class="flex-col-s-c">
                                    <div class="size-a-19 wrap-pic-s borad-50per of-hidden m-b-20">
                                        <img src="{{ asset('images/frontend/vendor/ava-01.jpg') }}" alt="IMG">
                                    </div>

                                    <span class="t1-m-1 text-uppercase cl-3 txt-center m-b-4">
										Marie Crawford
									</span>

                                    <span class="t1-s-5 cl-7 txt-center m-b-26">
										Wall Street Combany
									</span>

                                    <p class="t1-s-2 cl-6 txt-center m-b-32">
                                        The point of using Lorem Ipsum is that it has a normal distribution of letters, as opposed to using Many desktop publishing packages and web page Ipsum. the Lorem Ipsum generators on the Internet.
                                    </p>

                                    <div class="w-full flex-wr-sa-c">
                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-01.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-02.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-03.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-04.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-05.png') }}" alt="IMG">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item-slick p-rl-15">
                                <div class="flex-col-s-c">
                                    <div class="size-a-19 wrap-pic-s borad-50per of-hidden m-b-20">
                                        <img src="{{ asset('images/frontend/vendor/ava-02.jpg') }}" alt="IMG">
                                    </div>

                                    <span class="t1-m-1 text-uppercase cl-3 txt-center m-b-4">
										Jerry Alexander
									</span>

                                    <span class="t1-s-5 cl-7 txt-center m-b-26">
										Wall Street Combany
									</span>

                                    <p class="t1-s-2 cl-6 txt-center m-b-32">
                                        The point of using Lorem Ipsum is that it has a normal distribution of letters, as opposed to using Many desktop publishing packages and web page Ipsum. the Lorem Ipsum generators on the Internet.
                                    </p>

                                    <div class="w-full flex-wr-sa-c">
                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-01.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-03.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-04.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-02.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-05.png') }}" alt="IMG">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="item-slick p-rl-15">
                                <div class="flex-col-s-c">
                                    <div class="size-a-19 wrap-pic-s borad-50per of-hidden m-b-20">
                                        <img src="{{ asset('images/frontend/vendor/ava-04.jpg') }}" alt="IMG">
                                    </div>

                                    <span class="t1-m-1 text-uppercase cl-3 txt-center m-b-4">
										Benjamin Colon
									</span>

                                    <span class="t1-s-5 cl-7 txt-center m-b-26">
										Wall Street Combany
									</span>

                                    <p class="t1-s-2 cl-6 txt-center m-b-32">
                                        The point of using Lorem Ipsum is that it has a normal distribution of letters, as opposed to using Many desktop publishing packages and web page Ipsum. the Lorem Ipsum generators on the Internet.
                                    </p>

                                    <div class="w-full flex-wr-sa-c">
                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-05.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-01.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-02.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-03.png') }}" alt="IMG">
                                        </a>

                                        <a href="#" class="m-all-20">
                                            <img class="size-h-2 max-s-full hov-img2" src="{{ asset('images/frontend/vendor/icons/partner-04.png') }}" alt="IMG">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wrap-dot-slick p-t-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
    </script>
@endsection