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

        <div class="container-fluid p-0">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 550px;">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <h1 class="t1-b-1 white">PURPOSE BUILT LEGACY</h1>
                            <br/>
                            <hr class="border-white mx-auto" style="width: 50px; border-width: 3px;"/>
                            <br/>
                            <span class="t1-m-1 white">"A legacy one desires</span><b4/>
                            <span class="t1-m-1 white">to be passed down to the loved ones."</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paragraphs -->
    <section class="m-b-50">
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

    <!-- Three Pictures -->
    <section class="m-b-50">
        <div class="container">
            <hr class="border-dark mb-4" style="border-width: 2px;"/>
            <div class="row">
                <div class="col-4">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 300px;">
                    </div>
                </div>
                <div class="col-4">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 300px;">
                    </div>
                </div>
                <div class="col-4">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-4.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 300px;">
                    </div>
                </div>
            </div>
            <hr class="border-dark my-4" style="border-width: 2px;"/>
            <div class="row">
                <div class="col-4 text-center text-dark px-4">
                    <h1 class="t1-b-1">Embodiment</h1>
                    <h1 class="t1-b-1">of Serenity</h1>
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
                <div class="col-4 text-center text-dark px-4">
                    <h1 class="t1-b-1">Spacious</h1>
                    <h1 class="t1-b-1">Comfort</h1>
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
                <div class="col-4 text-center text-dark px-4">
                    <h1 class="t1-b-1">Lively</h1>
                    <h1 class="t1-b-1">Splendor</h1>
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

    <!-- Map -->
    <section>
        <div class="container-fluid p-0">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/paulmarc/introduction/introduction-5.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 650px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
    </script>
@endsection