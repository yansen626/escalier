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

        <div class="container-fluid">
            <!--  -->
            <div class="row">
                <div class="col-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/marc/home/home-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <h1 class="t1-b-1 white custom-font-2">BEGIN YOUR CHAPTER</h1>
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
    </section>

    <!-- Paul Marc -->
    <section class="m-b-50">
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
                            <a href="{{ route('frontend.paul.introduction') }}" class="btn btn-dark w-25 p-4 t1-m-1" style="border-radius: 30px;">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Within Marc's Boulevard -->
    <section class="mb-md-0 mb-4">
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

    <section class="m-b-50">

        <div class="container-fluid">
            <!--  -->
            <div class="row justify-content-center">
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
            <div class="row justify-content-center mb-4">
                <div class="col-md-6 col-12 text-center text-md-right">
                    <span class="t1-m-1 text-dark custom-font-1">FINELY CRAFTED BY</span>
                </div>
                <div class="col-md-6 col-12 text-center text-md-left">
                    <img class="img-trinity-responsive" src="{{ asset('images/marc/home/home-5.png') }}" height="45">
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <span class="t1-b-1 text-dark custom-font-2">CRAFTING NEW </span>
                    <span class="t1-b-1 gold custom-font-2">HORIZON</span>
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
    <style>
        .img-banner-responsive{
            height: 220px;
        }

        .img-house-responsive{
            height: 200px;
        }

        .img-paulmarc-responsive{
            height: 100px;
            width: auto;
        }

        .img-trinity-responsive{
            margin-top: 0;
        }

        .btn-paulmarc-more .w-25{
            width: 75% !important;
        }

        .t1-b-1{
            font-size: 24px;
        }

        .m-b-50{
            margin-bottom: 25px;
        }

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
            }

            .btn-paulmarc-more .w-25{
                width: 25% !important;
            }

            .t1-b-1{
                font-size: 36px;
            }

            .m-b-50{
                margin-bottom: 50px;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection