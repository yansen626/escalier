@extends('layouts.frontend-paul')

@section('head_and_title')
    <meta name="description" content="Paul Lanes">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PAUL MARC - PAUL LANES</title>
@endsection

@section('content')
    <!-- Tab Header -->
    <section class="bg-0 p-t-0 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-md-4 left-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <a href="{{ route('frontend.paul.prives') }}"><img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-10.png') }}" height="50" alt="header"/></a>
                    </div>
                </div>
                <div class="col-md-4 middle-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <a href="{{ route('frontend.paul.lanes') }}"><img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-11.png') }}" height="40" alt="header"/></a>
                    </div>
                </div>
                <div class="col-md-4 right-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-12.png') }}" height="40" alt="header"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-top-img" style="background-image: url('{{ asset('images/paulmarc/lanes/Banner Paul Desktop.jpg') }}');background-position: center;"></div>
    </section>


    <!-- DESKTOP -->
    <section class="bg-0 p-t-40 p-b-10 d-none d-md-block">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/lanes/paul-lane-disamping-desc.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-50 p-t-50 custom-font-2">Paul Marc Shophouse</h3>
                    <img src="{{ asset('images/paulmarc/lanes/Marcs Website (Paul) components-34.png') }}" height="50" alt="header"/>
                    <h5 class="t1-s-1 cl-3 txt-center m-b-11 p-t-50">
                        Purposefully built on the thriving city of Batam in a fully-integrated development
                        of Marc's Boulevard, Paul Lane Shophouses offers a highly promising and
                        accessible location for an excellent business and investment potential.
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <!-- MOBILE -->
    <section class="bg-0 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 m-b-50 text-center">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-25 p-t-50 custom-font-2">Paul Marc Shophouse</h3>
                    <img src="{{ asset('images/paulmarc/lanes/Marcs Website (Paul) components-34.png') }}" height="50" alt="header"/>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/lanes/paul-lane-disamping-desc.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                    <h5 class="t1-s-1 cl-3 txt-center m-b-11 p-t-50">
                        Purposefully built on the thriving city of Batam in a fully-integrated development
                        of Marc's Boulevard, Paul Lane Shophouses offers a highly promising and
                        accessible location for an excellent business and investment potential.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-40 p-b-0">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="flex-col-c-c p-b-20 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2">Shophouse</h3>
                    <h1 class="t1-m-4 cl-3 txt-center m-b-11 custom-font-2">THE PLANS</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="p-b-50 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <!-- Tab02 -->
                    <div class="tab02 p-t-20 text-center">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item col-md-4 p-0 tab-nav">
                                <a class="nav-link custom-font-1 active" data-toggle="tab" href="#siteplan" role="tab">SITE PLAN</a>
                            </li>

                            <li class="nav-item col-md-4 p-0 tab-nav">
                                <a class="nav-link custom-font-1" data-toggle="tab" href="#floorplan" role="tab">FLOOR PLAN</a>
                            </li>

                            <li class="nav-item col-md-4 p-0 tab-nav ">
                                <a class="nav-link custom-font-1" data-toggle="tab" href="#unitplan" role="tab" id="tabUnit">UNIT PLAN</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="border-bottom: none; border-left: none; border-right: none;">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="siteplan" role="tabpanel">
                                <div class="p-t-25">
                                    <div class="container">
                                        <!-- Title section -->
                                        <div class="row d-none d-md-block">
                                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                <img src="{{ asset('images/paulmarc/lanes/paul-lanes-site-plan-1.jpg') }}" height="auto" width="100%" alt="header"/>
                                            </div>
                                        </div>
                                        <div class="row d-block d-md-none">
                                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                <img src="{{ asset('images/paulmarc/lanes/mobile/PAUL MARC MOBILE UNIT-SitePlanLast.jpg') }}" height="150%" width="100%" alt="header"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="floorplan" role="tabpanel">
                                <div class="p-rl-30 p-t-15 p-b-35">
                                    <div class="container">
                                        <!-- Title section -->
                                        <div class="row d-none d-md-block">
                                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                <img src="{{ asset('images/paulmarc/lanes/Paul Lane - Floor Plan.jpg') }}" height="auto" width="100%" alt="header"/>
                                            </div>
                                        </div>

                                        <!-- Title section -->
                                        <div class="row d-block d-md-none">
                                            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                <img src="{{ asset('images/paulmarc/lanes/mobile/PAUL MARC MOBILE UNIT-47.jpg') }}" height="auto" width="100%" alt="header"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane" id="unitplan" role="tabpanel">
                                <div class="row d-none d-md-block">
                                    <div class="col-12 pt-4">
                                        <div class="unit-slider">
                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/lanes/Paul Lane (Unit Plan)-03.jpg') }}" height="400"/></div>
                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/lanes/Paul Lane (Unit Plan)-03.jpg') }}" height="400"/></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="row d-block d-md-none mx-2">
                                    <div class="col-12 pt-4">
                                        <div class="unit-slider">
                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/lanes/mobile/PAUL MARC MOBILE UNIT-48.jpg') }}"/></div>
                                            <div><img class="mx-auto" src="{{ asset('images/paulmarc/lanes/mobile/PAUL MARC MOBILE UNIT-49.jpg') }}"/></div>
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

    <section class="bg-0 p-t-0 p-b-20">
        <div class="container">
            <div class="flex-col-c-c">
                <div class="size-a-2 bg-3" style="width: 100%; height: 1px;"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-20">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <img src="{{ asset('images/paulmarc/lanes/Paul-lane-dibawah-plans.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0">
        <div class="container">
            <div class="flex-col-c-c">
                <div class="size-a-2 bg-3" style="width: 100%; height: 1px;"></div>
            </div>
        </div>
    </section>

    @include('partials.frontend._back-marc')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>

    <style type="text/css">


        .slick-prev:before {

        color: black;

        }

        .slick-next:before {

        color: black;

        }
        .bottom-line{
            border-bottom: 1px solid #333;
        }
        @media (max-width: 576px) {
            .header-top-img{
                min-height: 150px;
            }

            .header-img{
                min-height: 350px;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 100%;
            }

            .left-menu{
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-bottom: 1px solid #333;
            }
        }

        @media (min-width: 768px) {
            .left-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .left-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .header-top-img{
                min-height: 350px;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 100%;
            }

            .header-img{
                min-height: 350px;
                background-size: 100%;
                background-repeat: no-repeat;
                height: 100%;
            }

            .left-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .tab-left{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
                border-right: 1px solid #333;
            }

            .tab-right{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .four-box{
                height: 100px;
                text-align: center;
                vertical-align: middle;
                line-height: 90px;
            }

            .tab-nav{
                border: 1px solid #333;
            }
        }

        @media (min-width: 1200px) {
            .left-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .four-box{
                text-align: center;
                vertical-align: middle;
                line-height: 90px;
            }

            .header-img{
                min-height: 400px;
            }
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>

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