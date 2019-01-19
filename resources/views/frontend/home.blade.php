@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD</title>
@endsection

@section('content')

    <!-- Banner -->
    <section class="m-b-50">

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
                                <br/>
                                <hr class="border-white mx-auto" style="width: 50px; border-width: 3px;"/>
                                <br/>
                                <span class="t1-m-1 white custom-font-2">"This is not only a home. This Home is a witness to</span><b4/>
                                <span class="t1-m-1 white custom-font-2">those who live their story."</span>
                            </div>
                            <div class="d-block d-md-none p-3">
                                <h1 class="t1-b-1 white custom-font-2">BEGIN</h1>
                                <h1 class="t1-b-1 white custom-font-2">YOUR</h1>
                                <h1 class="t1-b-1 white custom-font-2">CHAPTER</h1>
                                <br/>
                                <hr class="border-white mx-auto" style="width: 50px; border-width: 3px;"/>
                                <br/>
                                <span class="t1-m-1 white custom-font-2">"This is not only a home. This Home is a witness to</span><b4/>
                                <span class="t1-m-1 white custom-font-2">those who live their story."</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paul Marc Desktop -->
    <section class="m-b-50 d-none d-md-block">
        <div class="container">
            <!--  -->
            <div class="row">
                <div class="col-md-6 col-12 mb-md-0 mb-3">
                    <div class="w-100 img-house-responsive" style="background-image: url('{{ asset('images/marc/home/home-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row mb-md-5 mb-3 mt-md-5">
                        <div class="col-12 text-center">
                            <h1 class="t1-b-1 custom-font-1 text-dark">INTRODUCING</h1>
                        </div>
                    </div>
                    <div class="row mb-md-5 mb-3">
                        <div class="col-12 text-center">
                            <img class="img-paulmarc-responsive" src="{{ asset('images/marc/home/home-3.png') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center btn-paulmarc-more">
                            <a href="{{ route('frontend.paul.introduction') }}" class="btn btn-dark w-25 p-4 t1-m-1 bg-custom-dark" style="border-radius: 30px;">MORE</a>
                        </div>
                    </div>
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
                            <a href="{{ route('frontend.paul.introduction') }}" class="btn btn-dark p-2 t1-s-1 font-weight-bold bg-custom-dark" style="border-radius: 30px; width: 150px;">MORE</a>
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
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <img src="{{ asset('images/marc/home/within-text-1.png') }}" width="130" class="m-auto">
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6 mb-md-0 mb-3">
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
                <div class="col-md-2 col-6 mb-md-0 mb-3">
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
                <div class="col-md-2 col-6 mb-md-0 mb-3">
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
                <div class="col-md-2 col-6">
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
                <div class="col-12 mb-4">
                    <div class="slider-within px-4">
                        <div class="px-1">
                            <div style="background-image: url('{{ asset('images/marc/home/within-1.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    height: 300px;">
                                <div class="box h-100 d-flex justify-content-center flex-column text-center" style="width: 120px;">
                                    <img src="{{ asset('images/marc/home/within-text-1.png') }}" width="100" class="m-auto">
                                </div>
                            </div>
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
                    <img class="img-trinity-responsive" src="{{ asset('images/marc/home/home-5.png') }}">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <div class="d-none d-md-block">
                        <span class="t1-b-1 text-dark custom-font-2">CRAFTING NEW </span>
                        <span class="t1-b-1 gold custom-font-2">HORIZON</span>
                    </div>
                    <div class="d-block d-md-none">
                        <span class="t1-b-1 text-dark custom-font-2">CRAFTING</span><br/>
                        <span class="t1-b-1 text-dark custom-font-2">NEW </span>
                        <span class="t1-b-1 gold custom-font-2"> HORIZON</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-12 text-justify">
                    <p>Initiated in 2009, PT Perintis Triniti Properti (Triniti Property Group) commenced its
                        journey with its first 5-hectare land development project, Ubud Village, by the golden
                        hands of the Founders, Septian Starlin, Matius Jusuf, Bong Chandra, and Yohanes L.
                        Andayaprana. Developments of iconic projects began since 2014 untill 2017,
                        introducing thoughtful lands namely Brooklyn, Springwood Residence, Yukata Suites,
                        The Smith, and Collins Boulevard. Four of its five properties were booked up to 90%,</p>
                </div>
                <div class="col-md-6 col-12 text-justify">
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <style>
        .img-banner-responsive{
            height: 500px;
        }

        .img-house-responsive{
            height: 400px;
        }

        .img-paulmarc-responsive{
            height: 100px;
            width: auto;
        }

        .img-trinity-responsive{
            margin-top: 0;
            height: 30px;
            width: auto;

        }

        .btn-paulmarc-more .w-25{
            width: 75% !important;
        }

        .m-b-50{
            margin-bottom: 25px;
        }

        .text-finely-crafted{
            font-size: 10px;
            font-weight: bold;
        }

        /*.slick-dots li button:before {*/
            /*color: #fff;*/
        /*}*/

        /*.slick-dots li.slick-active button:before {*/
            /*color: #fff !important;*/
        /*}*/

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 550px;
            }

            .img-house-responsive{
                height: 600px;
            }

            .img-paulmarc-responsive{
                height: 200px;
                width: auto;
            }

            .img-trinity-responsive{
                margin-top: -28px;
                height: 45px;
                width: auto;
            }

            .btn-paulmarc-more .w-25{
                width: 25% !important;
            }

            .m-b-50{
                margin-bottom: 50px;
            }

            .text-finely-crafted{
                font-size: 13px;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1200px) {
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
            arrows: false
        });
    </script>
@endsection