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

        <div class="container-fluid p-0">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/home-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 550px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paul Marc -->
    <section class="m-b-100">
        <div class="container">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/home-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 600px;">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="row mb-5 mt-md-5">
                        <div class="col-12 text-center">
                            <h1 class="t1-b-1">INTRODUCING</h1>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <img src="{{ asset('images/marc/home/home-3.png') }}" height="200">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-dark w-25 p-4 t1-m-1" style="border-radius: 30px;">MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Within Marc's Boulevard -->
    <section>
        <div class="container-fluid px-0 py-5 bg-1">
            <!--  -->
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <h1 class="t1-m-1" style="color: #fff;">WITHIN MARC'S BOULEVARD</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-1"></div>
                <div class="col-2 px-1">
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
                <div class="col-2">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white">Dean Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-m-1 text-white">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white">Grant Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-m-1 text-white">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white">Will Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-m-1 text-white">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/within-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <span class="t1-m-1 text-white">Glenn Marc</span>
                            <hr class="w-25 mx-auto border-white"/>
                            <span class="t1-m-1 text-white">#COMINGSOON</span>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>

    <section class="m-b-50">

        <div class="container-fluid p-0">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/home/home-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 600px;">
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
                    <span class="t1-m-1 text-dark">FINELY CRAFTED BY</span>
                </div>
                <div class="col-md-6 col-12 text-center text-md-left">
                    <img src="{{ asset('images/marc/home/home-5.png') }}" height="45" style="margin-top: -28px;">
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <span class="t1-b-1 text-dark">CRAFTING NEW </span>
                    <span class="t1-b-1 gold">HORIZON</span>
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

@section('scripts')
    <script>
    </script>
@endsection