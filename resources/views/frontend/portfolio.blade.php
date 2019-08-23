@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Escalier Portfolio">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Escalier, Property, Office, Residence, Apartment, House">

<title>ESCALIER - PORTFOLIO</title>
@endsection

@section('content')

<div class="row no-gutters">
    <div class="col-12">
        <div class="w-100 header-img" style="background-image: url('{{ asset('images/escalier/portfolio/header-portofolio.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
        </div>
    </div>
</div>


<section class="bg-0 p-t-0 p-b-10 pt-5">
    <div class="container">
        <!-- Title section -->
        <div class="row">
            <div class="p-b-50 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <!-- Tab02 -->
                <div class="p-t-20 text-center">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mb-5" role="tablist">
                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link active text-dark" data-toggle="tab" href="#office" role="tab">Office
                                Spaces</a>
                        </li>

                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link text-dark" data-toggle="tab" href="#visualdisplay" role="tab"
                                id="tabFloor">Visual Display Units</a>
                        </li>

                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link text-dark" data-toggle="tab" href="#residential" role="tab"
                                id="tabUnit">Residential Spaces</a>
                        </li>

                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link text-dark" data-toggle="tab" href="#commercial" role="tab">Commercial
                                Spaces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
                    <!-- Lightbox -->
<section>
                        <div class="tab-content pb-5">
                            <div class="tab-pane fade show active" id="office" role="tabpanel">
                                <div class="container">
                                    <div class="row pb-5 row-p">
                                        <div class="col-md-4 col-12">
                                            <a href="{{ asset('images/escalier/portfolio/office/office-1.jpg') }}"
                                                data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-1.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-2.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-2.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-3.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-3.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-5 row-p">
                                    <div class="col-md-4 col-12">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-4.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-4.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-5.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-5.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-6.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-6.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-5 row-p">
                                    <div class="col-md-4 col-12">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-7.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-7.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-8.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-8.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-9.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-9.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-5 row-p">
                                    <div class="col-md-4 col-12">
                                        <a href="{{ asset('images/escalier/portfolio/office/office-10.jpg') }}"
                                            data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="{{ asset('images/escalier/portfolio/office/office-10.jpg') }}"
                                                class="img-fluid rounded">
                                        </a>
                                        <div class="text-left pl-3 spaces-portfolio-responsive">
                                            <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                            <span>Jakarta</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show pb-5" id="visualdisplay" role="tabpanel">
                        <div class="container">
                            <div class="row pb-5 row-p">
                                <div class="col-md-4 col-12">
                                    <a href="{{ asset('images/escalier/portfolio/visual/visual-1.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/visual/visual-1.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/visual/visual-2.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/visual/visual-2.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/visual/visual-3.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/visual/visual-3.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-5 row-p">
                                <div class="col-md-4 col-12">
                                    <a href="{{ asset('images/escalier/portfolio/visual/visual-4.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/visual/visual-4.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/visual/visual-5.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/visual/visual-5.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/visual/visual-6.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/visual/visual-6.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="residential" role="tabpanel">
                        <div class="container">
                            <div class="row pb-5 row-p">
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/residential/residential-1.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/residential/residential-1.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/residential/residential-2.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/residential/residential-2.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/residential/residential-3.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/residential/residential-3.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row pb-5 row-p">
                                <div class="col-md-4 col-12">
                                    <a href="{{ asset('images/escalier/portfolio/residential/residential-4.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/residential/residential-4.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ asset('images/escalier/portfolio/residential/residential-5.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/residential/residential-5.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="commercial" role="tabpanel">
                        <div class="container">
                            <div class="row pb-5 row-p">
                                <div class="col-md-4 col-12">
                                    <a href="{{ asset('images/escalier/portfolio/commercial/commercial-1.jpg') }}"
                                        data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                        <img src="{{ asset('images/escalier/portfolio/commercial/commercial-1.jpg') }}"
                                            class="img-fluid rounded">
                                    </a>
                                    <div class="text-left pl-3 spaces-portfolio-responsive">
                                        <span class="font-weight-bold">Lorem Ipsum Sit Dolor</span><br />
                                        <span>Jakarta</span>
                                    </div>
                                </div>
                                <div class="col-md-8"></div>
                            </div>
                        </div>
                    </div>
                </div>
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


<style type="text/css">
    .spaces-portfolio-responsive {
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 20px;
        margin-top: -20px;
    }

    .row-p {
        margin: 0px !important;
    }

    .slick-prev:before {

        color: black;

    }

    .slick-next:before {

        color: black;

    }

    .carousel-control-prev-icon {
        z-index: 99999;
    }

    .carousel-control-prev {
        filter: invert(100%);
    }

    .carousel-control-next {
        filter: invert(100%);
    }

    .tab-content>.tab-pane,

    .pill-content>.pill-pane {

        display: block;
        /* undo display:none          */

        height: 0;
        /* height:0 is also invisible */

        overflow-y: hidden;
        /* no-overflow                */

    }

    .tab-content>.active,

    .pill-content>.active {

        height: auto;
        /* let the content decide it  */

        overflow-y: visible;

    }

    /* bootstrap hack end */
    ``` @media (max-width: 576px) {
        .header-top-img {
            min-height: 150px;
        }

        .spaces-portfolio-responsive {
            padding-left: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 20px !important;
            margin-top: -20px !important;
        }

        .header-img {
            min-height: 350px;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
        }

        .left-menu {
            border-bottom: 1px solid #333;
        }

        .middle-menu {
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-bottom: 1px solid #333;
        }
    }

    @media (min-width: 768px) {
        .left-menu {}

        .middle-menu {
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-bottom: 1px solid #333;
        }

        .left-menu {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        .middle-menu {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-left: 1px solid #333;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .row-p {
            margin: 15px;
        }
    }

    @media (max-width: 992px) {}

    @media (min-width: 1024px) {
        .header-top-img {
            min-height: 350px;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
        }

        .header-img {
            min-height: 350px;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
        }

        .left-menu {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        .middle-menu {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-left: 1px solid #333;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .tab-left {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
            border-right: 1px solid #333;
        }

        .tab-right {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .four-box {
            height: 100px;
            text-align: center;
            vertical-align: middle;
            line-height: 90px;
        }

        .tab-nav {
            border: 1px solid #333;
        }
    }

    @media (min-width: 1200px) {
        .left-menu {
            border-left: 1px solid #333;
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        .right-menu {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .four-box {
            text-align: center;
            vertical-align: middle;
            line-height: 90px;
        }

        .header-img {
            min-height: 500px;
        }
    }
</style>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js">
</script>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    });

    $(".floor-slider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true
        
    });

    $('#tabFloor').on('show.bs.tab', function (e) {
        $('.floor-slider').slick('refresh');

    })

    $("#tabFloor").click(function(){
        $('.floor-slider').slick('refresh');
    });

    $(".unit-slider").slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        arrows: true
    });

    $('#tabUnit').on('show.bs.tab', function (e) {
        $('.unit-slider').slick('refresh');

    })

    $("#tabUnit").click(function(){
        $('.unit-slider').slick('refresh');
    });

    
</script>
@endsection