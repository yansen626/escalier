@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Escalier Home">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Escalier, Interior, Office, Residential, Apartment, Commercial, Spaces">

<title>ESCALIER</title>
@endsection

@section('content')

<!-- Banner -->

<section class="slider d-none d-md-block">
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

                    <p class="tp-caption tp-resizeme caption-2 custom-font-playfair-displayregular"
                        data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-visibility="['on', 'on', 'on', 'on']"

                        data-fontsize="['35', '35', '35', '30']"
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
                        <span>Ensuring Excellence in Every Step</span>
                        </p>

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

{{-- Mobile banner --}}
<div class="container-fluid d-md-none d-block p-0">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="w-100 header-mobile-img" style="background-image: url('{{ asset('images/escalier/home/header-photo.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;">
                <div class="box h-100 d-flex justify-content-center flex-column text-center custom-font-playfair-displayregular text-white">
                    <span style="font-size: 20px;">Ensuring Excellence in Every Step</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Who we are Desktop -->
<section class="section-box d-none d-md-block" style="background-color:#f8f8f8;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 mb-md-0 mb-3 pl-5">
                <span class="pb-2 custom-font-avenir-light">ABOUT US</span>
                <h2 class="t1-b-1 custom-font-playfair-displayregular text-dark txt-header-home">WHO WE ARE</h2>
            </div>
            <div class="col-md-8 col-12 mt-4 p-l-0">
                <p class="custom-font-avenir-medium">Serving as an interior build and design company, Escalier strives to deliver the finest interior
                    experience, developed and customized elegantly to individual needs. Escalier commits to deliver
                    excellence, ensuring satisfaction at its best. Whether for a homey or professional ambience,
                    Escalier devotes to craft an ideal yet passionate design, leading to perfection in every
                    stroke.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-box d-none d-md-block">
    <div class="container">
        <div class="row pl-5">
            <div class="col-md-5 col-12 mb-md-0 mb-3">
                <span class="custom-font-avenir-light">ABOUT US</span>
                <h2 class="t1-b-1 custom-font-playfair-displayregular text-dark txt-header-home">WHAT INSPIRE US</h2>
                <div class="pr-5 pt-3">
                    <p class="custom-font-avenir-medium">We envision an escalating curve as we progress through time, connecting
                        and delivering each need with utmost perfection. Through a French
                        philosophy, Escalier understands the importance of process from the
                        planning stage till its implementation, attentively projecting the best
                        service at every step, ending it with a high note.</p>
                </div>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('images/escalier/home/what-inspire-us.jpg') }}" class="img-inspires-responsive">
            </div>
        </div>
    </div>
</section>


{{-- Mobile Section Who we are --}}
<section class="section-box d-block d-md-none" style="background-color:#f8f8f8;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="t1-b-1 custom-font-playfair-displayregular text-dark txt-header-home text-center">WHO WE ARE</h2>
                <div class=" px-4 pt-4 text-justify">
                    <p class="custom-font-avenir-medium">Serving as an interior build and design company, Escalier strives to deliver the finest
                        interior experience, developed and customized elegantly to individual needs. Escalier commits to
                        deliver excellence, ensuring satisfaction at its best. Whether for a homey or professional
                        ambience, Escalier devotes to craft an ideal yet passionate design, leading to perfection in
                        every stroke.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="t1-b-1 custom-font-playfair-displayregular text-dark txt-header-home text-center">WHAT INSPIRE US</h2>
                <div class="px-4 pt-3 text-justify">
                    <p class="custom-font-avenir-medium">We envision an escalating curve as we progress through time, connecting
                        and delivering each need with utmost perfection. Through a French
                        philosophy, Escalier understands the importance of process from the
                        planning stage till its implementation, attentively projecting the best
                        service at every step, ending it with a high note.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-box" style="background-color:#f8f8f8;">
    <div class="container">
        <div class="row pl-0 pl-md-5">
            <div class="col-md-4 col-12 pb-1 text-center text-md-left">
                <span class="custom-font-avenir-light txt-sub-header-home">CORE VALUES</span>
                <div class="col-md-8"></div>
            </div>
        </div>
        <div class="row pl-0 pl-md-5">
            <div class="col-md-4 mb-md-0 mb-5 text-center text-md-left">
                <div class="pb-4">
                    <span class="custom-font-playfair-displayregular" style="font-size: 20px;">Detail is Matter for Us</span>
                </div>
                <div class="pr-2">
                    <p class="custom-font-avenir-medium">We understands how details matter. We are committed to craft the best designs for our clients,
                        perfecting it with finest attention.</p>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-5 text-center text-md-left">
                <div class="pb-4">
                    <span class="custom-font-playfair-displayregular" style="font-size: 20px;">Communication</span>
                </div>
                <div class="pr-2">
                    <p class="custom-font-avenir-medium">Client’s satisfaction is our priority. Our
                        professional designers are dedicated to listen
                        and cater the best service to our clients, ensuring
                        excellence in every step.</p>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 text-center text-md-left">
                <div class="pb-4">
                    <span class="custom-font-playfair-displayregular" style="font-size: 20px;">Speed</span>
                </div>
                <div class="pr-2">
                    <p class="custom-font-avenir-medium">We highly value your time. Our commitment is to
                        deliver your needs in speed, without
                        compromising the quality in the execution.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-box d-none d-md-block">
    <div class="container">
        <div class="row pl-5">
            <div class="col-md-4 col-12 pt-4">
                <p class="pb-2 custom-font-avenir-light">ABOUT US</p>
                <h2 class="t1-b-1 custom-font-playfair-displayregular text-dark pb-2 txt-header-home">TRUSTED WORK</h2>
                <a href="{{ route('frontend.about') }}" class="btn btn-secondary btn-sm active custom-font-avenir-medium" role="button"
                    aria-pressed="true">View more</a>
            </div>
            <div class="col-md-8">
                <img src="{{ asset('images/escalier/home/website-escalier_16.png') }}" class="img-client-responsive">
            </div>
        </div>
    </div>
</section>

<section class="section-box d-block d-md-none">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 pt-4 mb-4 text-center">
                <p class="pb-2 custom-font-avenir-light txt-sub-header-home">ABOUT US</p>
                <h2 class="t1-b-1 custom-font-playfair-displayregular text-dark pb-2 txt-header-home">TRUSTED WORK</h2>
            </div>
            <div class="col-12">
                <img src="{{ asset('images/escalier/home/website-escalier_16.png') }}" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ route('frontend.about') }}" class="btn btn-secondary btn-sm active custom-font-avenir-light" role="button"
                   aria-pressed="true">View more</a>
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
    .section-box{
        padding-top: 4em;
        padding-bottom: 4em;
    }

    .header-mobile-img {
        height: 190px;
    }

    .img-client-responsive {
        margin-top: 0;
        height: 70px;
        width: auto;
    }

    .img-inspires-responsive {
        margin-top: 0;
        height: 110px;
        width: auto;
    }

    .txt-sub-header-home {
        font-size: 12px;
    }

    .txt-header-home {
        font-size: 24px;
    }

    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .m-b-50 {
        margin-bottom: 25px;
    }

    @media (min-width: 576px) {

    }

    @media (min-width: 768px) {
        .section-box{
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .img-inspires-responsive {
            margin-top: 0;
            height: 261px;
            width: auto;
        }

        .img-client-responsive {
            margin-top: 0;
            height: 170px;
            width: auto;
        }

        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .m-b-50 {
            margin-bottom: 50px;
        }

        .txt-sub-header-home {
            font-size: 16px;
        }

        .txt-header-home {
            font-size: 42px;
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
