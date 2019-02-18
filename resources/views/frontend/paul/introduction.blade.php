@extends('layouts.frontend-paul')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PAUL MARC - INTRODUCTION</title>
@endsection

@section('content')

    <!-- Banner -->
    <section class="m-b-50">

        <div class="container-fluid">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-100 img-banner-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <h1 class="t1-b-1 white custom-font-2">PURPOSE BUILT LEGACY</h1>
                            <hr class="border-white mx-auto my-md-4" style="width: 50px; border-width: 2px;"/>
                            <span class="t1-m-1 white custom-font-2">"A legacy one desires</span>
                            <span class="t1-m-1 white custom-font-2">to be passed down to the loved ones."</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paragraphs -->
    <section class="p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-12 text-center">
                    <p>
                        A home is like a story. It never stays for one generation. It is built to be passed down to the next one.
                        It is a legacy. Being in a serene surrounding where purposeful technical elegance linked harmoniously
                        with life-enhancing environment is an idea that Paul Marc by Triniti Land inspired to present.
                    </p>
                    <br/>
                    <p>
                        Nestled within the landmark development of Marc’s Boulevard, Paul Marc signifies that life in itself, is
                        quality. Intricately designed, with sustainable living in mind, Paul Marc seeks to create valuable life
                        experiences. This will be the legacy one desires to be passed down to one’s future generations.
                    </p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>

    <!-- Three Pictures DESKTOP-->
    <section class="m-b-50 d-none d-md-block">
        <div class="container">
            <hr class="border-dark mb-4" style="border-width: 2px;"/>
            <div class="row">
                <div class="col-4">
                    <div class="w-100 img-plant-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                </div>
                <div class="col-4">
                    <div class="w-100 img-plant-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                </div>
                <div class="col-4">
                    <div class="w-100 img-plant-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                </div>
            </div>
            <hr class="border-dark my-4" style="border-width: 2px;"/>
            <div class="row">
                <div class="col-md-4 col-12 text-center text-dark px-4 mb-3 mb-md-0">
                    <h1 class="t1-b-1 custom-font-2">Embodiment</h1>
                    <h1 class="t1-b-1 custom-font-2">of Serenity</h1>
                    <br/>
                    <p>
                        Imagine a place surrounded by greenery, chimed to the
                        music of chirping birds. Fresh air, tranquility and the
                        coolness of the evening breeze are all part of your daily
                        routine. The exclusive Paul Marc by Triniti Land aims to
                        encapsulate all the above by merging city life with
                        luscious landscape, creating an eco-paradise
                    </p>
                </div>
                <div class="col-md-4 col-12 text-center text-dark px-4 mb-3 mb-md-0">
                    <h1 class="t1-b-1 custom-font-2">Spacious</h1>
                    <h1 class="t1-b-1 custom-font-2">Comfort</h1>
                    <br/>
                    <p>
                        Designed with the intention to create your personal
                        Eden, Paul Marc by Triniti Land has brilliantly
                        segregated its facilities and living space with a 75/25
                        split thus seamlessly conjoining space, comfort and
                        style. So let your hair down, kick back your shoes and
                        luxuriate in this unique setup where you get to enjoy
                        your everyday escapade.
                    </p>
                </div>
                <div class="col-md-4 col-12 text-center text-dark px-4">
                    <h1 class="t1-b-1 custom-font-2">Lively</h1>
                    <h1 class="t1-b-1 custom-font-2">Splendor</h1>
                    <br/>
                    <p>
                        Within the Paul Marc district, Triniti Land also offers
                        three other exclusive developments. Paul & Prive
                        Condo Villa and Paul The Place Townhouse seek to
                        satisfy those yearning for an ultimate residential
                        lifestyle, while Paul Lane aims to fulfill the needs of
                        those desiring to operate commercially. With such
                        distinctive and well thought-out features, one is
                        undeniably spoilt for choice.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Three Pictures MOBILE-->
    <section class="d-block d-md-none">
        <div class="container">
            <hr class="border-dark p-3" style="border-width: 2px;"/>
            <div class="row">
                <div class="col-12 p-t-32 p-l0-r0-4 p-r-0 text-center">
                    <div class="w-100 img-plant-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                    <div class="col-md-4 col-12 text-dark px-4 p-l0-r0-5">
                        <h1 class="t1-b-1 custom-font-2">Embodiment</h1>
                        <h1 class="t1-b-1 custom-font-2">of Serenity</h1>
                        <br/>
                        <p>
                            Imagine a place surrounded by greenery, chimed to the
                            music of chirping birds. Fresh air, tranquility and the
                            coolness of the evening breeze are all part of your daily
                            routine. The exclusive Paul Marc by Triniti Land aims to
                            encapsulate all the above by merging city life with
                            luscious landscape, creating an eco-paradise
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="flex-col-c-c p-b-20">
                        <div class="size-a-2 bg-3" style="width: 50px; height: 2px;"></div>
                    </div>
                </div>

                <div class="col-12 p-t-32 p-l0-r0-4 p-r-0 text-center">
                    <div class="w-100 img-plant-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                    <div class="col-md-4 col-12 text-dark px-4 p-l0-r0-5">
                        <h1 class="t1-b-1 custom-font-2">Spacious</h1>
                        <h1 class="t1-b-1 custom-font-2">Comfort</h1>
                        <br/>
                        <p>
                            Designed with the intention to create your personal
                            Eden, Paul Marc by Triniti Land has brilliantly
                            segregated its facilities and living space with a 75/25
                            split thus seamlessly conjoining space, comfort and
                            style. So let your hair down, kick back your shoes and
                            luxuriate in this unique setup where you get to enjoy
                            your everyday escapade.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="flex-col-c-c p-b-20">
                        <div class="size-a-2 bg-3" style="width: 50px; height: 2px;"></div>
                    </div>
                </div>


                <div class="col-12 p-t-32 p-l0-r0-4 p-r-0 text-center">
                    <div class="w-100 img-plant-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                    <div class="col-md-4 col-12 text-dark px-4 p-l0-r0-5">
                        <h1 class="t1-b-1 custom-font-2">Lively</h1>
                        <h1 class="t1-b-1 custom-font-2">Splendor</h1>
                        <br/>
                        <p>
                            Within the Paul Marc district, Triniti Land also offers
                            three other exclusive developments. Paul & Prive
                            Condo Villa and Paul The Place Townhouse seek to
                            satisfy those yearning for an ultimate residential
                            lifestyle, while Paul Lane aims to fulfill the needs of
                            those desiring to operate commercially. With such
                            distinctive and well thought-out features, one is
                            undeniably spoilt for choice.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="flex-col-c-c p-b-20">
                        <div class="size-a-2 bg-3" style="width: 50px; height: 2px;"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Map -->
    {{--<section>--}}
        {{--<div class="container-fluid px-0">--}}
            {{--<div class="row no-gutters">--}}
                    {{--<div class="w-100 img-map-responsive" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-5.jpg') }}');--}}
                            {{--background-repeat: no-repeat;--}}
                            {{--background-position: center;--}}
                            {{--background-size: cover;">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="mb-md-0 mb-4">
        <div class="container-fluid py-md-5 py-3 bg-1">
            <!--  -->
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <h1 class="t1-m-1 custom-font-1" style="color: #fff;">WITHIN PAUL MARC</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-2"></div>
                <div class="col-md-2 col-4">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-paul-prive.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-paul-lane.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 480px;">
                    </div>
                </div>
                <div class="col-md-2 col-4">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-paul-place.jpg') }}');
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
                <div class="col-md-2">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>

    <section class="mb-md-0 mb-4">

    </section>

@endsection

@section('styles')
    <style>
        .img-banner-responsive{
            height: 200px;
        }

        .img-map-responsive{
            height: 220px;
        }

        .img-plant-responsive{
            height: 200px;
        }

        .t1-b-1{
            font-size: 24px;
        }

        .m-b-50{
            margin-bottom: 25px;
        }

        .p-l0-r0-3{
            padding-top: 1.5em;
            padding-bottom: 1.5em;
            padding-left: 0;
            padding-right: 0;
        }
        .p-l0-r0-4{
            padding-top: 2em;
            padding-bottom: 0;
            padding-left: 0;
            padding-right: 0;
        }
        .p-l0-r0-5{
            padding-top: 3em;
            padding-bottom: 3em;
            padding-left: 0;
            padding-right: 0;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 550px;
            }

            .img-plant-responsive{
                height: 300px;
            }

            .img-map-responsive{
                height: 650px;
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