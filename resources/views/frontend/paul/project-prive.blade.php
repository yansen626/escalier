@extends('layouts.frontend-paul')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PAUL MARC - PAUL PLACE</title>
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
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-top-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-13.jpg') }}');"></div>
    </section>

    <section class="bg-0 p-t-40 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-14.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-lg-6 col-xs-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11">Paul Marc Condovilla</h3>
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-10.png') }}" height="50" alt="header"/>
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        Prestigious and inviting, Paul & Prive is the ideal Condovilla to be sought after.
                        Placed strategically, designed for comfort and laced with natural beauty, these
                        living spaces cater for the hustlers and the laid backs.
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
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11">Condovilla</h3>
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
                                    <p class="t1-s-2 cl-6 m-b-9">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
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
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-16.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <img src="{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-17.jpg') }}" height="100%" width="100%" alt="header"/>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-40 p-b-0">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="flex-col-c-c p-b-50 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <h3 class="t1-s-2 cl-3 txt-center m-b-11">Condovilla</h3>
                    <h1 class="t1-m-4 cl-3 txt-center m-b-11">FACILITIES</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-18.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                50 m Lap Pool
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-19.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Basketball Court
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-20.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Clubhouse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-21.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Kid’s Pool
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-20 p-b-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-22.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Playground
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-23.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Barbeque Pit
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 mb-5 mb-md-0">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-24.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #353334;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Outdoor Gym
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                    <div class="flex-col-c-c pos-relative">
                        <div class="hov-img0 w-full col-md-12 header-img" style="background-image: url('{{ asset('images/paulmarc/projects/Marcs Website (Paul) components-25.jpg') }}')"></div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none col-md-12 bg-1" style="background-color: #1d342a;">
                            <div class="size-a-29 t1-s-5 cl-0 four-box">
                                Yoga Space
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style type="text/css">
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

            }

            .middle-menu{
                border-bottom: 1px solid #333;
            }

            .right-menu{
                border-bottom: 1px solid #333;
            }

            .left-menu{
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
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
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .middle-menu{
                border-top: 1px solid #333;
                border-bottom: 1px solid #333;
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
        }

        @media (min-width: 1200px) {
            .left-menu{
                border-left: 1px solid #333;
                border-right: 1px solid #333;
                border-top: 1px solid #333;
            }

            .right-menu{
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
    <script>
    </script>
@endsection