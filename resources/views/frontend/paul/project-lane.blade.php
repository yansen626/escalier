@extends('layouts.frontend-paul')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PAUL MARC - PAUL LANE</title>
@endsection

@section('content')
    <!-- Tab Header -->
    <section class="bg-0 p-t-0 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 left-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <a href="{{ route('frontend.paul.prives') }}"><img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-10.png') }}" height="50" alt="header"/></a>
                    </div>
                </div>
                <div class="col-lg-4 middle-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <a href="{{ route('frontend.paul.lanes') }}"><img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-11.png') }}" height="40" alt="header"/></a>
                    </div>
                </div>
                <div class="col-lg-4 right-menu">
                    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
                        <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-12.png') }}" height="40" alt="header"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-top-img" style="background-image: url('{{ asset('images/paulmarc/lanes/Marcs Website (Paul) components-32.jpg') }}');"></div>
    </section>

    <section class="bg-0 p-t-40 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/lanes/Marcs Website (Paul) components-33.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11 p-t-20 ">Paul Marc Shophouse</h3>
                    <img src="{{ asset('images/paulmarc/lanes/Marcs Website (Paul) components-34.png') }}" height="50" alt="header"/>
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11 p-t-20 ">
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
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11">Shophouse</h3>
                    <h1 class="t1-m-4 cl-3 txt-center m-b-11">THE PLANS</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="flex-col-c-c p-b-50 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <!-- Tab02 -->
                    <div class="tab02 p-t-20 text-center">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item col-md-4 p-0 tab-nav">
                                <a class="nav-link active" data-toggle="tab" href="#siteplan" role="tab">SITE PLAN</a>
                            </li>

                            <li class="nav-item col-md-4 p-0 tab-nav">
                                <a class="nav-link" data-toggle="tab" href="#floorplan" role="tab">FLOOR PLAN</a>
                            </li>

                            <li class="nav-item col-md-4 p-0 tab-nav">
                                <a class="nav-link" data-toggle="tab" href="#unitplan" role="tab">UNIT PLAN</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="border-bottom: none; border-left: none; border-right: none;">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="siteplan" role="tabpanel">
                                <div class="p-rl-30 p-t-25 p-b-35">
                                    <div class="container">
                                        <!-- Title section -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                <img src="{{ asset('images/paulmarc/lanes/Marcs Website (Paul)-11.jpg') }}" height="100%" width="100%" alt="header"/>
                                            </div>
                                            <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                                                <h3 class="t1-s-2 cl-3 txt-center m-b-11 p-t-20">
                                                    Paul Lane <br/>
                                                    <b style="font-size: 40px;">SITE PLAN</b>
                                                </h3>
                                                <h5 class="t1-s-2 cl-3 txt-center m-b-11 p-t-50">
                                                    Total Land Area <b>3,600 sqm</b>
                                                </h5>
                                                <div class="row" style="font-size: 10px; width: 59%;">
                                                    <div class="col-md-6 tab-left">
                                                        Total GFA <b>5,760 sqm</b>
                                                    </div>
                                                    <div class="col-md-6 tab-right">
                                                        Total Unit <b>20 units</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="floorplan" role="tabpanel">
                                <div class="p-rl-30 p-t-25 p-b-35">
                                    <div class="container">
                                        <!-- Title section -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul)-10.jpg') }}" height="100%" width="100%" alt="header"/>
                                            </div>
                                            <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                                                <h3 class="t1-s-2 cl-3 txt-center m-b-11 p-t-20">
                                                    Paul & Prive <br/>
                                                    <b style="font-size: 40px;">SITE PLAN</b>
                                                </h3>
                                                <h5 class="t1-s-2 cl-3 txt-center m-b-11 p-t-50">
                                                    Total Land Area <b>14,000 sqm</b>
                                                </h5>
                                                <div class="row" style="font-size: 10px; width: 59%;">
                                                    <div class="col-md-6 tab-left">
                                                        Total Unit <b>239 units</b>
                                                    </div>
                                                    <div class="col-md-6 tab-right">
                                                        Total Parking <b>240 lots</b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="unitplan" role="tabpanel">
                                <div class="p-rl-30 p-t-25 p-b-35">
                                    <div class="container">
                                        <!-- Title section -->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                <img src="{{ asset('images/paulmarc/lanes/Typical Unit.jpg') }}" height="100%" width="100%" alt="header"/>
                                            </div>
                                            <div class="flex-col-c-c col-md-6 col-lg-6 col-xs-12 txt-left">

                                                <div class="row bottom-line responsive-width">
                                                    <h3 class="t1-s-2 cl-3 m-b-11 p-t-20 p-l-5">
                                                        Paul Lane <br/>
                                                        <b style="font-size: 40px;">UNIT PLAN</b>
                                                    </h3>
                                                </div>
                                                <div class="row bottom-line responsive-width">
                                                    <h5 class="t1-s-2 cl-3 m-b-11 p-t-50 p-l-5">
                                                        <b>TYPICAL UNIT</b>
                                                    </h5>
                                                </div>
                                                <div class="row bottom-line responsive-width" style="font-size: 10px;">
                                                    <div class="col-md-12 p-t-30 p-l-5">
                                                        Building Area per Unit  <b>270.0 sqm</b>
                                                    </div>
                                                    <div class="col-md-12 p-l-5">
                                                        Land Area per Unit  <b>90.0 sqm</b>
                                                    </div>
                                                    <div class="col-md-12 p-b-30 p-l-5">
                                                        No. of Unit  <b>16 units</b>
                                                    </div>
                                                </div>
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
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 100%; height: 2px;"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <img src="{{ asset('images/paulmarc/lanes/Marcs Website (Paul) components-35.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('styles')
    <style type="text/css">
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
            .responsive-width{
                width: 90%;
            }
        }

        @media (min-width: 768px) {
            .left-menu{
                border-bottom: 1px solid #333;

            }

            .middle-menu{
            }

            .right-menu{
                border-bottom: 1px solid #333;
            }

            .left-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }
            .responsive-width{
                width: 90%;
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
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
            }

            .right-menu{
                border-left: 1px solid #333;
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
            .responsive-width{
                width: 59%;
            }
        }

        @media (min-width: 1200px) {
            .left-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .four-box{
                text-align: center;
                vertical-align: middle;
                line-height: 90px;
            }

            .header-img{
                min-height: 400px;
            }
            .responsive-width{
                width: 59%;
            }
        }
    </style>
@endsection

@section('scripts')
    <script>
    </script>
@endsection