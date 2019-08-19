@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Home Page">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Property, Office, Residence, Apartment, House">

<title>ESCALIER</title>
@endsection

@section('content')

<!-- Banner -->

<section class="slider">
    <div class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
            <ul>
                <!-- Slide 1 -->
                <li data-transition="slidingoverlayhorizontal">
                    <img src="images/escalier/home/header-photo.jpg" alt="IMG-SLIDE" class="rev-slidebg">

                    {{-- <h2 class="tp-caption tp-resizeme caption-1 text-uppercase" 
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-visibility="['on', 'on', 'on', 'on']"
 
                        data-fontsize="['48', '48', '48', '38']" 
                        data-lineheight="['58', '58', '58', '58']"
                        data-color="['#FFF']" 
                        data-textAlign="['center', 'center', 'center', 'center']"
                     
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['-83', '-83', '-83', '-93']" 
                     
                        data-width="['1200','992','768','480']"
                        data-height="['auto', 'auto', 'auto', 'auto']" 
                        data-whitespace="['normal']" 
                     
                        data-paddingtop="[0, 0, 0, 0]"
                        data-paddingright="[15, 15, 15, 15]"
                        data-paddingbottom="[0, 0, 0, 0]"
                        data-paddingleft="[15, 15, 15, 15]"

                        data-basealign="slide" 
                        data-responsive_offset="off"
                        >BEGIN YOUR CHAPTER</h2> --}}

                    {{-- <p class="tp-caption tp-resizeme caption-2" 
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-visibility="['on', 'on', 'on', 'on']"
 
                        data-fontsize="['30', '30', '30', '25']" 
                        data-lineheight="['39', '39', '39', '39']"
                        data-color="['#FFF']" 
                        data-textAlign="['center', 'center', 'center', 'center']"
                     
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['-13', '-13', '-13', '-13']" 
                     
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
                        <Span>This is not only a home. This Home is a witness to</span>
                        <span>those who live their story.<span>
                        </p> --}}

                    {{-- <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
                        data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['88', '88', '88', '88']" 
                     
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
                        </div> --}}
                </li>

                <!-- Slide 2 -->
                {{--<li data-transition="slidingoverlayvertical">--}}
                {{--<img src="images/marc/home/home-2.jpg" alt="IMG-SLIDE" class="rev-slidebg">--}}

                {{--<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" --}}
                {{--data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
                {{--data-visibility="['on', 'on', 'on', 'on']"--}}
                {{----}}
                {{--data-fontsize="['48', '48', '48', '38']" --}}
                {{--data-lineheight="['58', '58', '58', '58']"--}}
                {{--data-color="['#FFF']" --}}
                {{--data-textAlign="['center', 'center', 'center', 'center']"--}}
                {{----}}
                {{--data-x="['center']" --}}
                {{--data-y="['center']" --}}
                {{--data-hoffset="['0', '0', '0', '0']" --}}
                {{--data-voffset="['-83', '-83', '-83', '-93']" --}}
                {{----}}
                {{--data-width="['1200','992','768','480']"--}}
                {{--data-height="['auto', 'auto', 'auto', 'auto']" --}}
                {{--data-whitespace="['normal']" --}}
                {{----}}
                {{--data-paddingtop="[0, 0, 0, 0]"--}}
                {{--data-paddingright="[15, 15, 15, 15]"--}}
                {{--data-paddingbottom="[0, 0, 0, 0]"--}}
                {{--data-paddingleft="[15, 15, 15, 15]"--}}

                {{--data-basealign="slide" --}}
                {{--data-responsive_offset="off"--}}
                {{-->BEGIN YOUR CHAPTER</h2>--}}

                {{--<p class="tp-caption tp-resizeme caption-2" --}}
                {{--data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
                {{--data-visibility="['on', 'on', 'on', 'on']"--}}
                {{----}}
                {{--data-fontsize="['30', '30', '30', '25']" --}}
                {{--data-lineheight="['39', '39', '39', '39']"--}}
                {{--data-color="['#FFF']" --}}
                {{--data-textAlign="['center', 'center', 'center', 'center']"--}}
                {{----}}
                {{--data-x="['center']" --}}
                {{--data-y="['center']" --}}
                {{--data-hoffset="['0', '0', '0', '0']" --}}
                {{--data-voffset="['-13', '-13', '-13', '-13']" --}}
                {{----}}
                {{--data-width="['1200','992','768','480']"--}}
                {{--data-height="['auto', 'auto', 'auto', 'auto']" --}}
                {{--data-whitespace="['normal']" --}}
                {{----}}
                {{--data-paddingtop="[0, 0, 0, 0]"--}}
                {{--data-paddingright="[15, 15, 15, 15]"--}}
                {{--data-paddingbottom="[0, 0, 0, 0]"--}}
                {{--data-paddingleft="[15, 15, 15, 15]"--}}

                {{--data-basealign="slide" --}}
                {{--data-responsive_offset="off"--}}
                {{-->--}}
                {{--This is not only a home. This Home is a witness to--}}
                {{--those who live their story.--}}
                {{--</p>--}}

                {{-- <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
                        data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['88', '88', '88', '88']" 
                     
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
                        </div> --}}
                </li>

                <!-- Slide 3 -->
                {{--<li data-transition="boxslide">--}}
                {{--<img src="images/marc/home/home-4.jpg" alt="IMG-SLIDE" class="rev-slidebg">--}}

                {{--<h2 class="tp-caption tp-resizeme caption-1 text-uppercase" --}}
                {{--data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:-500px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
                {{--data-visibility="['on', 'on', 'on', 'on']"--}}
                {{----}}
                {{--data-fontsize="['48', '48', '48', '38']" --}}
                {{--data-lineheight="['58', '58', '58', '58']"--}}
                {{--data-color="['#FFF']" --}}
                {{--data-textAlign="['center', 'center', 'center', 'center']"--}}
                {{----}}
                {{--data-x="['center']" --}}
                {{--data-y="['center']" --}}
                {{--data-hoffset="['0', '0', '0', '0']" --}}
                {{--data-voffset="['-83', '-83', '-83', '-93']" --}}
                {{----}}
                {{--data-width="['1200','992','768','480']"--}}
                {{--data-height="['auto', 'auto', 'auto', 'auto']" --}}
                {{--data-whitespace="['normal']" --}}
                {{----}}
                {{--data-paddingtop="[0, 0, 0, 0]"--}}
                {{--data-paddingright="[15, 15, 15, 15]"--}}
                {{--data-paddingbottom="[0, 0, 0, 0]"--}}
                {{--data-paddingleft="[15, 15, 15, 15]"--}}

                {{--data-basealign="slide" --}}
                {{--data-responsive_offset="off"--}}
                {{-->BEGIN YOUR CHAPTER</h2>--}}

                {{--<p class="tp-caption tp-resizeme caption-2" --}}
                {{--data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:500px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}
                {{--data-visibility="['on', 'on', 'on', 'on']"--}}
                {{----}}
                {{--data-fontsize="['30', '30', '30', '25']" --}}
                {{--data-lineheight="['39', '39', '39', '39']"--}}
                {{--data-color="['#FFF']" --}}
                {{--data-textAlign="['center', 'center', 'center', 'center']"--}}
                {{----}}
                {{--data-x="['center']" --}}
                {{--data-y="['center']" --}}
                {{--data-hoffset="['0', '0', '0', '0']" --}}
                {{--data-voffset="['-13', '-13', '-13', '-13']" --}}
                {{----}}
                {{--data-width="['1200','992','768','480']"--}}
                {{--data-height="['auto', 'auto', 'auto', 'auto']" --}}
                {{--data-whitespace="['normal']" --}}
                {{----}}
                {{--data-paddingtop="[0, 0, 0, 0]"--}}
                {{--data-paddingright="[15, 15, 15, 15]"--}}
                {{--data-paddingbottom="[0, 0, 0, 0]"--}}
                {{--data-paddingleft="[15, 15, 15, 15]"--}}

                {{--data-basealign="slide" --}}
                {{--data-responsive_offset="off"--}}
                {{-->--}}
                {{--This is not only a home. This Home is a witness to--}}
                {{--those who live their story.--}}
                {{--</p>--}}

                {{-- <div class="tp-caption tp-resizeme caption-3 flex-wr-c-c d-flex"
                        data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-x="['center']" 
                        data-y="['center']" 
                        data-hoffset="['0', '0', '0', '0']" 
                        data-voffset="['88', '88', '88', '88']" 
                     
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
                        </div> --}}
                </li>
            </ul>
        </div>
    </div>
</section>
{{-- <section class="m-b-50">

        <div class="container-fluid px-0">
            <!--  -->
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/marc/home/home-1.jpg') }}');
background-repeat: no-repeat;
background-position: center;
background-size: cover;">
<div class="box h-100 d-flex justify-content-center flex-column text-center">
    <div class="d-none d-md-block">
        <h1 class="t1-b-1 white custom-font-2">BEGIN YOUR CHAPTER</h1>
        <br />
        <hr class="border-white mx-auto" style="width: 50px; border-width: 3px;" />
        <br />
        <span class="t1-m-1 white custom-font-2">"This is not only a home. This Home is a witness to</span>
        <b4 />
        <span class="t1-m-1 white custom-font-2">those who live their story."</span>
    </div>
    <div class="d-block d-md-none p-3">
        <h1 class="t1-b-1 white custom-font-2">BEGIN</h1>
        <h1 class="t1-b-1 white custom-font-2">YOUR</h1>
        <h1 class="t1-b-1 white custom-font-2">CHAPTER</h1>
        <br />
        <hr class="border-white mx-auto" style="width: 50px; border-width: 3px;" />
        <br />
        <span class="t1-m-1 white custom-font-2">"This is not only a home. This Home is a witness to</span>
        <b4 />
        <span class="t1-m-1 white custom-font-2">those who live their story."</span>
    </div>
</div>
</div>
</div>
</div>
</div>
</section> --}}

<!-- Who we are Desktop -->
<section class="m-b-50 d-none d-md-block m-t-100">
    <div class="container">
        <!--  -->
        <div class="row m-b-150">
            <div class="col-md-4 col-12 mb-md-0 mb-3">
                <span class="">ABOUT US</span>
                <h2 class="t1-b-1 custom-font-2 text-dark">WHO WE ARE</h2>
            </div>
            <div class="col-md-8 mt-4">
                <span>Serving as an interior build and design company, Escalier strives to deliver the finest interior
                    experience, developed and customized elegantly to individual needs. Escalier commits to deliver
                    excellence, ensuring satisfaction at its best. Whether for a homey or professional ambience,
                    Escalier devotes to craft an ideal yet passionate design, leading to perfection in every
                    stroke.</span>
            </div>
        </div>
        <div class="row m-b-150">
            <div class="col-md-5 col-12 mb-md-0 mb-3">
                <span class="">ABOUT US</span>
                <h2 class="t1-b-1 custom-font-1 text-dark pb-3">WHAT INSPIRE US</h2>
                <span>We envision an escalating curve as we progress through time, connecting
                    and delivering each need with utmost perfection. Through a French
                    philosophy, Escalier understands the importance of process from the
                    planning stage till its implementation, attentively projecting the best
                    service at every step, ending it with a high note.</span>
            </div>
            <div class="col-md-7 text-right">
                <img src="{{ asset('images/escalier/home/what-inspire-us.jpg') }}" height="250">
            </div>
        </div>
    </div>
</section>

<section class="m-b-150">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pb-1">
                <span>CORE VALUES</span>
                <div class="col-md-8"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="pb-4">
                    <span class="font-weight-bold" style="font-size: 20px;">Detail is Matter for Us</span>
                </div>
                <div>
                    <span>We understands how details matter. We are
                        committed to craft the best designs for our clients,
                        perfecting it with finest attention.</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pb-4">
                    <span class="font-weight-bold" style="font-size: 20px;">Communication</span>
                </div>
                <div>
                    <span>Client’s satisfaction is our priority. Our
                        professional designers are dedicated to listen
                        and cater the best service to our clients, ensuring
                        excellence in every steps.</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pb-4">
                    <span class="font-weight-bold" style="font-size: 20px;">Speed</span>
                </div>
                <div>
                    <span>We highly value your time. Our commitment is to
                        deliver your needs in speed, without
                        compromising the quality in the execution.</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p class="pb-2">ABOUT US</p>
                <h2 class="t1-b-1 custom-font-2 text-dark pb-2">TRUSTED WORK</h2>
                <a href="{{ route('frontend.about') }}" class="btn btn-secondary btn-sm active" role="button"
                    aria-pressed="true">View more</a>
            </div>
            <div class="col-md-8">
                <img src="{{ asset('images/escalier/home/website-escalier_16.png') }}">
            </div>
        </div>
    </div>
</section>

<!-- Paul Marc Mobile -->
<section class="d-block d-md-none">
    <div class="container-fluid px-0">
        <!--  -->
        <div class="row no-gutters">
            <div class="col-12 mb-5">
                <div class="row no-gutters mb-5">
                    <div class="col-12 text-center">
                        <h1 class="t1-m-1 custom-font-1 text-dark font-weight-bold pt-4">INTRODUCING</h1>
                    </div>
                </div>
                <div class="row no-gutters mb-5">
                    <div class="col-12 text-center">
                        <img src="{{ asset('images/marc/home/home-3.png') }}" height="130">
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-12 text-center btn-paulmarc-more">
                        <a href="{{ route('frontend.paul.introduction') }}"
                            class="btn btn-dark p-2 t1-s-1 font-weight-bold bg-custom-dark"
                            style="border-radius: 30px; width: 150px;">MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="w-100 img-house-responsive" style="background-image: url('{{ asset('images/marc/home/home-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Within Marc's Boulevard DESKTOP -->
<section class="mb-md-0 mb-4 d-none d-md-block">
    <div class="container-fluid py-md-5 py-3 bg-1">
        <!--  -->
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h1 class="t1-m-1 custom-font-1" style="color: #fff;">WITHIN MARC'S BOULEVARD</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <div class="col-md-2 col-6 px-md-1 mb-md-0 mb-3">
                <a href="{{ route('frontend.paul.introduction') }}">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-1.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                                height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <img src="{{ asset('images/marc/home/within-text-1.png') }}" width="130" class="m-auto">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6 mb-md-0 mb-3">
                <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <span class="t1-m-1 text-white custom-font-2">Dean Marc</span>
                        <hr class="w-25 mx-auto border-white" />
                        <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-md-0 mb-3">
                <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <span class="t1-m-1 text-white custom-font-2">Grant Marc</span>
                        <hr class="w-25 mx-auto border-white" />
                        <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-md-0 mb-3">
                <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <span class="t1-m-1 text-white custom-font-2">Will Marc</span>
                        <hr class="w-25 mx-auto border-white" />
                        <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6">
                <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                    <div class="box h-100 d-flex justify-content-center flex-column text-center">
                        <span class="t1-m-1 text-white custom-font-2">Glenn Marc</span>
                        <hr class="w-25 mx-auto border-white" />
                        <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

<!-- Within Marc's Boulevard MOBILE -->
<section class="d-block d-md-none">
    <div class="container-fluid px-0 bg-1">
        <!--  -->
        <div class="row no-gutters">
            <div class="col-12 text-center">
                <h1 class="t1-s-1 custom-font-1 font-weight-bold py-4" style="color: #fff;">WITHIN MARC'S BOULEVARD</h1>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-12 px-4 mb-4">
                <div class="slider-within mx-2">
                    <div class="px-1">
                        <a href="{{ route('frontend.paul.introduction') }}">
                            <div style="background-image: url('{{ asset('images/marc/home/within-1.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: cover;
                                        height: 300px;">
                                <div class="box h-100 d-flex justify-content-center flex-column text-center"
                                    style="width: 120px;">
                                    <img src="{{ asset('images/marc/home/within-text-1.png') }}" width="100"
                                        class="m-auto">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="px-1">
                        <div style="background-image: url('{{ asset('images/marc/home/within-2.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    height: 300px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center"
                                style="width: 120px;">
                                <span class="t1-s-1 text-white custom-font-2">Dean Marc</span>
                                <hr class="w-25 mx-auto border-white" />
                                <span class="text-white custom-font-1" style="font-size: 10px;">#COMINGSOON</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-1">
                        <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-3.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    height: 300px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center"
                                style="width: 120px;">
                                <span class="t1-s-1 text-white custom-font-2">Grant Marc</span>
                                <hr class="w-25 mx-auto border-white" />
                                <span class="text-white custom-font-1" style="font-size: 10px;">#COMINGSOON</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-1">
                        <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-4.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    height: 300px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center"
                                style="width: 120px;">
                                <span class="t1-s-1 text-white custom-font-2">Will Marc</span>
                                <hr class="w-25 mx-auto border-white" />
                                <span class="text-white custom-font-1" style="font-size: 10px;">#COMINGSOON</span>
                            </div>
                        </div>
                    </div>
                    <div class="px-1">
                        <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-5.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    height: 300px;">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center"
                                style="width: 120px;">
                                <span class="t1-s-1 text-white custom-font-2">Glenn Marc</span>
                                <hr class="w-25 mx-auto border-white" />
                                <span class="text-white custom-font-1" style="font-size: 10px;">#COMINGSOON</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="bg-0 p-t-0 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item active">
                                        <img class="w-100" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower A)-01.jpg') }}"
height="300"/>
</div>
<div class="carousel-item">
    <img class="w-100" src="{{ asset('images/paulmarc/floorplan/Paul & Prive - Floor Plan (Tower A)-02.jpg') }}"
        height="400" />
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</div>
</div> --}}
{{-- <div class="flex-col-c-c p-b-10">
                    <div class="size-a-2 bg-3" style="width: 100%; height: 1px;"></div>
                </div> --}}
</div>
</section>

<section class="m-b-50">

    <div class="container-fluid px-0">
        <!--  -->
        <div class="row no-gutters">
            <div class="col-12">
                <div class="w-100 img-house-responsive" style="background-image: url('{{ asset('images/marc/home/home-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Finely Crafted -->
<section class="m-b-50">
    <div class="container">
        <!--  -->
        <div class="row mb-5 mb-md-4">
            <div class="col-md-6 col-12 mb-2 mb-md-0 text-center text-md-right">
                <span class="text-dark custom-font-1 text-finely-crafted">FINELY CRAFTED BY</span>
            </div>
            <div class="col-md-6 col-12 text-center text-md-left">
                <a href="https://trinitiland.com" target="_blank">
                    <img class="img-trinity-responsive" src="{{ asset('images/marc/home/home-5.png') }}">
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="d-none d-md-block">
                    <span class="t1-b-1 text-dark custom-font-2">CRAFTING NEW </span>
                    <span class="t1-b-1 gold custom-font-2">HORIZON</span>
                </div>
                <div class="d-block d-md-none">
                    <span class="t1-b-1 text-dark custom-font-2">CRAFTING</span><br />
                    <span class="t1-b-1 text-dark custom-font-2">NEW </span>
                    <span class="t1-b-1 gold custom-font-2"> HORIZON</span>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-12 text-center text-md-left">
                <p>Initiated in 2009, PT Perintis Triniti Properti (Triniti Property Group) commenced its
                    journey with its first 5-hectare land development project, Ubud Village, by the golden
                    hands of the Founders, Septian Starlin, Matius Jusuf, Bong Chandra, and Yohanes L.
                    Andayaprana. Developments of iconic projects began since 2014 untill 2017,
                    introducing thoughtful lands namely Brooklyn, Springwood Residence, Yukata Suites,
                    The Smith, and Collins Boulevard. Four of its five properties were booked up to 90%,</p>
                <br />
            </div>
            <div class="col-md-6 col-12 text-center text-md-left">
                <p>gaining more than hundreds million US$ revenue in no time. The success brought Triniti
                    Property Group emerged with a new face named Triniti Land, while launching its Rp 5
                    trillion worth Superblock Project, Collins Boulevard, in 2018. Reaching its 9th year of
                    building and innovating, Triniti Land plans to commence an Initial Public Offering (Go
                    Public) and create masterplans of building Township Development scale projects in
                    Jakarta, Tangerang, and Batam.</p>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
<style>
    /* .carousel-control-prev {
            filter: invert(100%);
        }
        .carousel-control-next {
            filter: invert(100%);
        } */

    .img-banner-responsive {
        height: 500px;
    }

    .img-house-responsive {
        height: 400px;
    }

    .img-paulmarc-responsive {
        height: 100px;
        width: auto;
    }

    .img-trinity-responsive {
        margin-top: 0;
        height: 30px;
        width: auto;

    }

    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .m-b-50 {
        margin-bottom: 25px;
    }

    .text-finely-crafted {
        font-size: 10px;
        font-weight: bold;
    }

    /*.slick-dots li button:before {*/
    /*color: #fff;*/
    /*}*/

    /*.slick-dots li.slick-active button:before {*/
    /*color: #fff !important;*/
    /*}*/

    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .img-banner-responsive {
            height: 550px;
        }

        .img-house-responsive {
            height: 600px;
        }

        .img-paulmarc-responsive {
            height: 200px;
            width: auto;
        }

        .img-trinity-responsive {
            margin-top: -28px;
            height: 45px;
            width: auto;
        }

        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .m-b-50 {
            margin-bottom: 50px;
        }

        .text-finely-crafted {
            font-size: 13px;
        }
    }

    @media (min-width: 992px) {}

    @media (min-width: 1200px) {}
</style>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $('.slider-within').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
            arrows: true
        });
</script>
@endsection