@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD - DISTRICT</title>
@endsection

@section('content')

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/districts/Marcs Website components-21.jpg') }}');"></div>
    </section>

    <!-- Within Marc's Boulevard DESKTOP -->
    <section class="mb-md-0 mb-4 d-none d-md-block">
        <div class="container-fluid px-0 py-5">
            <!--  -->
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <h1 class="t1-b-1 custom-font-2" style="color:#000000;">WITHIN MARC'S BOULEVARD</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-2 col-6 px-md-1 p-t-20">
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
                <div class="col-md-2 col-6 p-t-20">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white custom-font-2">Dean Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 p-t-20">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white custom-font-2">Grant Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 p-t-20">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white custom-font-2">Will Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 p-t-20">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white custom-font-2">Glenn Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-s-1 text-white custom-font-1">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        {{--<div class="container">--}}
            {{-- <div class="flex-col-c-c p-b-20">--}}
                {{--<div class="size-a-2 bg-3" style="width: 100%; height: 2px;"></div>--}}
            {{--</div> --}}
            {{--<div class="row">--}}
                {{--<div class="col-12 text-center">--}}
                    {{--<a href="{{ route('frontend.paul.introduction') }}" class="btn btn-dark bg-custom-dark w-100 pt-3 pb-4" style="border-radius: 30px;"><strong>BACK TO</strong><br/>--}}
                        {{--<img id="back-navigation" src="{{ asset('images/marc/marc-back.png') }}">--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div> --}}
    </section>

    <!-- Within Marc's Boulevard MOBILE -->
    <section class="d-block d-md-none">
        <div class="container-fluid px-0 py-2">
            <!--  -->
            <div class="row no-gutters">
                <div class="col-12 text-center">
                    <h1 class="t1-b-1 custom-font-2" style="color:#000000;">WITHIN MARC'S BOULEVARD</h1>
                </div>
            </div>
            <div class="row no-gutters pt-sm-4">
                <div class="col-12 px-4 mb-2 py-2">
                    <div class="slider-within mx-2">
                        <div class="px-1">
                            <a href="{{ route('frontend.paul.introduction') }}">
                                <div style="background-image: url('{{ asset('images/marc/home/within-1.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: cover;
                                        height: 300px;">
                                    <div class="box h-100 d-flex justify-content-center flex-column text-center" style="width: 120px;">
                                        <img src="{{ asset('images/marc/home/within-text-1.png') }}" width="100" class="m-auto">
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
                                <div class="box h-100 d-flex justify-content-center flex-column text-center" style="width: 120px;">
                                    <span class="t1-s-1 text-white custom-font-2">Dean Marc</span>
                                    <hr class="w-25 mx-auto border-white"/>
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
                                <div class="box h-100 d-flex justify-content-center flex-column text-center" style="width: 120px;">
                                    <span class="t1-s-1 text-white custom-font-2">Grant Marc</span>
                                    <hr class="w-25 mx-auto border-white"/>
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
                                <div class="box h-100 d-flex justify-content-center flex-column text-center" style="width: 120px;">
                                    <span class="t1-s-1 text-white custom-font-2">Will Marc</span>
                                    <hr class="w-25 mx-auto border-white"/>
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
                                <div class="box h-100 d-flex justify-content-center flex-column text-center" style="width: 120px;">
                                    <span class="t1-s-1 text-white custom-font-2">Glenn Marc</span>
                                    <hr class="w-25 mx-auto border-white"/>
                                    <span class="text-white custom-font-1" style="font-size: 10px;">#COMINGSOON</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            color: #000000;
        }
        .slick-next:before {
            color: #000000;
        }
        @media (max-width: 576px) {
            .mycontent-left {
                border-right: none;
            }
            .mycontent-right {
                border-left: none;
            }
            .centered {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (min-width: 768px) {
            .mycontent-left {
                border-right: none;
            }
            .mycontent-right {
                border-left: none;
            }

            .centered {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .mycontent-left {
                border-right: 1px solid #333;
                height: 345px;
            }

            .mycontent-right {
                border-left: 1px solid #333;
                height: 100%;
            }

            .centered {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (min-width: 1200px) {
            .centered {
                position: absolute;
                top: 45%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }

            .mycontent-left {
                border-right: 1px solid #333;
                height: 297px;
            }

            .mycontent-right {
                border-left: 1px solid #333;
                height: 100%;
            }
        }
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