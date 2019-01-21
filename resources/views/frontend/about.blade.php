@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD</title>
@endsection

@section('styles')
    <style type="text/css">

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
            .header-img{
                min-height: 150px;
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
                top: 80%;
                left: 70%;
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
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }

            .header-img{
                min-height: 300px;
            }
        }

        @media (min-width: 1200px) {
            .centered {
                position: absolute;
                top: 80%;
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

            .header-img{
                min-height: 400px;
            }
        }
    </style>
@endsection

@section('content')


    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/about/Marcs Website components-15.jpg') }}');"></div>
    </section>

    <!-- Mobile Section Start -->
    <section class="bg-0 p-t-60 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-0">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                    BEGIN
                </h3>
                <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                    YOUR
                </h3>
                <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                    CHAPTER
                </h3>
                <h5 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2" style="font-weight: 500;">
                    "This is not only a home.
                    <br/>
                    This Home is a witness to those
                    <br/>
                    who live their story."
                </h5>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-20 d-block d-md-none">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 50px;"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-10 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-xs-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        Holding son for the first time, launching the very first business, meeting a blind date : the days are filled
                        with stories. Big and small. To live in a place where those stories can spring is one start to begin with.
                        Inspired by worth-living stories, Marc's Boulevard by Triniti Land is an admired development, with five
                        stylish collections of unique districts adding fine touches to the horizon of Indonesia's thriving Batam City.
                        It presents seamless living spaces which celebrate the pride worth achieving, the home worth loving and
                        the Marc worth living. All for the greatest chapters of your life.
                    </h5>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <section class="m-b-50 d-block d-md-none">
        <div class="container-fluid px-0">
            <!--  -->
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/marc/about/Marcs Website components-16.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 600px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <div class="d-block d-md-none p-3">
                                <h1 class="t1-b-1 white custom-font-2" style="text-align: center; vertical-align: center;">THE PRIDE<br/>WORTH ACHIEVING.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-10 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2" style="font-weight: 500; font-size: 20px;">
                        "This is the home you will
                        <br/>
                        proud to own. This will be
                        <br/>
                        your pride."
                    </h5>
                </div>
                <div class="col-12"></div>
                <br/>
                <div class="flex-col-c-c p-b-20 col-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        Wrapped around the dashingly designed facade
                        are finely crafted living spaces and seamless blend
                        of sleekly developed residences, retail, amenities
                        and green open spaces. The highly sought-after
                        location, along with its remarkable landmark
                        architecture, lead Marc's Boulevard by Triniti Land
                        to be a grand and exceptional living surrounding.
                        Presenting a livable stage where those beautiful
                        stories of yours will be made alive.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-30 d-block d-md-none">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 50px; height: 2px;"></div>
            </div>
        </div>
    </section>

    <section class="m-b-50 d-block d-md-none">
        <div class="container-fluid px-0">
            <!--  -->
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/marc/about/Marcs Website components-17.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 600px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <div class="d-block d-md-none p-3">
                                <h1 class="t1-b-1 white custom-font-2" style="text-align: center; vertical-align: center;">THE HOME<br/>WORTH LIVING.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-10 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2" style="font-weight: 500; font-size: 20px;">
                        "This is the place you will love
                        <br/>
                        to stay. This will be the home
                        <br/>
                        you love."
                    </h5>
                </div>
                <div class="col-12"></div>
                <br/>
                <div class="flex-col-c-c p-b-20 col-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        Find your most idealized expectation of a fulfilling life
                        being satisfied in Marc's Boulevard by Triniti Land.
                        Peaceful elegance by the green hues of nature mingles
                        well with it's modern and aesthetically-pleasing design.
                        Featuring extensive forms of life-enhancing facilities and
                        communal space, Marc's Boulevard provides countless
                        meaningful experiences and add a pleasing touch to
                        every story you live in.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-30 d-block d-md-none">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 50px; height: 2px;"></div>
            </div>
        </div>
    </section>

    <section class="m-b-50 d-block d-md-none">
        <div class="container-fluid px-0">
            <!--  -->
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/marc/about/Marcs Website components-18.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 600px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <div class="d-block d-md-none p-3">
                                <h1 class="t1-b-1 white custom-font-2" style="text-align: center; vertical-align: center;">THE HOME<br/>WORTH LIVING.</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-10 p-b-10 d-block d-md-none">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2" style="font-weight: 500; font-size: 20px;">
                        "This is the home where
                        <br/>
                        you choose to live. This is
                        <br/>
                        the Marc."
                    </h5>
                </div>
                <div class="col-12"></div>
                <br/>
                <div class="flex-col-c-c p-b-20 col-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        The fully integrated mixed-use development of Marc's
                        Boulevard presents an utmost convenience to all its
                        residents. Whether it be picking up your daughter from
                        her first day of school or rewarding yourself at that newly
                        opened flagship stores, nothing is far from your door.
                        Initiated by an award-winning developer, Triniti Land,
                        Each of these five unique districts of perfection are
                        thoughtfully planned with a single-minded dedication to
                        the highest standards of quality living spaces and life
                        fulfillment.
                    </h5>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-30 d-block d-md-none">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 50px; height: 2px;"></div>
            </div>
        </div>
    </section>
    <!-- Mobile Section Finish -->

    <!-- Why chosse us -->
    <section class="bg-0 p-t-60 p-b-10 d-none d-md-block">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-50">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                    BEGIN YOUR CHAPTER
                </h3>
                <h5 class="t1-s-2 cl-3 txt-center m-b-11 custom-font-2" style="font-weight: 500;">
                    "This is not only a home. This Home is a witness to
                    <br/>
                    those who live their story."
                </h5>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-20 d-none d-md-block">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-10 p-b-10 d-none d-md-block">
        <div class="container">
            <!-- Title section -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="flex-col-c-c p-b-50 col-md-6 col-xs-12">
                    <h5 class="t1-s-2 cl-3 txt-center m-b-11">
                        Holding son for the first time, launching the very first business, meeting a blind date : the days are filled
                        with stories. Big and small. To live in a place where those stories can spring is one start to begin with.
                        Inspired by worth-living stories, Marc's Boulevard by Triniti Land is an admired development, with five
                        stylish collections of unique districts adding fine touches to the horizon of Indonesia's thriving Batam City.
                        It presents seamless living spaces which celebrate the pride worth achieving, the home worth loving and
                        the Marc worth living. All for the greatest chapters of your life.
                    </h5>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-20 d-none d-md-block">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 100%; height: 2px;"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-40 p-b-30 d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                        <div class="hov-img0 of-hidden w-full m-b-20">
                            <img src="{{ asset('images/marc/about/Marcs Website components-16.jpg') }}" alt="IMG">
                        </div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none">
                            <div class="size-a-29 p-rl-5 borad-5 t1-m-5 cl-0 text-uppercase m-l-10 centered custom-font-2">
                                THE PRIDE
                                <br/>
                                WORTH ACHIEVING.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                        <div class="hov-img0 of-hidden w-full m-b-20">
                            <img src="{{ asset('images/marc/about/Marcs Website components-17.jpg') }}" alt="IMG">
                        </div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none">
                            <div class="size-a-29 p-rl-5 borad-5 t1-m-5 cl-0 text-uppercase m-l-10 centered custom-font-2">
                                THE HOME
                                <br/>
                                WORTH LOVING.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="flex-col-c-c pos-relative" data-sale="Sale" data-new="New">
                        <div class="hov-img0 of-hidden w-full m-b-20">
                            <img src="{{ asset('images/marc/about/Marcs Website components-18.jpg') }}" alt="IMG">
                        </div>

                        <div class="w-full z-index-100 p-all-10 pointer-e-none">
                            <div class="size-a-29 p-rl-5 borad-5 t1-m-5 cl-0 text-uppercase m-l-10 centered custom-font-2">
                                THE MARC
                                <br/>
                                WORTH LIVING.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-20 d-none d-md-block">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 100%; height: 2px;"></div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-40 p-b-30 d-none d-md-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-4 col-lg-4 mycontent-left">
                    <div class="flex-col-c-c pos-relative">
                        <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                            "This is the home you will proud to
                            own. This will be your pride."
                        </div>

                        <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                            Wrapped around the dashingly designed facade
                            are finely crafted living spaces and seamless blend
                            of sleekly developed residences, retail, amenities
                            and green open spaces. The highly sought-after
                            location, along with its remarkable landmark
                            architecture, lead Marc's Boulevard by Triniti Land
                            to be a grand and exceptional living surrounding.
                            Presenting a livable stage where those beautiful
                            stories of yours will be made alive.
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="flex-col-c-c pos-relative">
                        <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                            "This is the place you will love to stay.
                            This will be the home you love."
                        </div>

                        <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                            Find your most idealized expectation of a fulfilling
                            life being satisfied in Marc's Boulevard by Triniti
                            Land. Peaceful elegance by the green hues of
                            nature mingles well with it's modern and
                            aesthetically-pleasing design. Featuring extensive
                            forms of life-enhancing facilities and communal
                            space, Marc's Boulevard provides countless
                            meaningful experiences and add a pleasing touch
                            to every story you live in.
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 mycontent-right">
                    <div class="flex-col-c-c pos-relative">
                        <div class="p-rl-5 borad-5 t1-s-4 cl-1 m-l-10 custom-font-2" style="font-weight: 600;">
                            "This is the home where you choose to
                            live. This is the Marc."
                        </div>

                        <div class="p-rl-5 t1-s-2 cl-1 m-l-10 p-t-20">
                            The fully integrated mixed-use development of
                            Marc's Boulevard presents an utmost convenience
                            to all its residents. Whether it be picking up your
                            daughter from her first day of school or rewarding
                            yourself at that newly opened flagship stores,
                            nothing is far from your door. Initiated by an
                            award-winning developer, Triniti Land, Each of
                            these five unique districts of perfection are
                            thoughtfully planned with a single-minded
                            dedication to the highest standards of quality
                            living spaces and life fulfillment.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-0 p-t-0 p-b-20 d-none d-md-block">
        <div class="container">
            <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 100%; height: 2px;"></div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection