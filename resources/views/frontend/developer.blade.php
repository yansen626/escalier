@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD - DEVELOPER</title>
@endsection

@section('styles')
    <style type="text/css">

        @media (max-width: 576px) {
            .header-img{
                min-height: 150px;
            }
        }

        @media (min-width: 768px) {
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .header-img{
                min-height: 300px;
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            .header-img{
                min-height: 400px;
                width: 100%;
            }
        }

        .bg-img3 {
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('content')

    <!-- About -->
    <section class="flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="col-md-12 size-a-18 bg-img3 respon-3 header-img" style="background-image: url('{{ asset('images/marc/developer/Marcs Website update-34.png') }}');"></div>
    </section>

    <!-- Mobile Version -->
    <section class="flex-wr-s-st m-b-0 d-block d-md-none" style="background: #1f2020;">
        <div class="col-md-12 size-a-18 bg-img3 respon-3 header-img" style="background-image: url('{{ asset('images/marc/developer/Marcs Website update-34.png') }}');"></div>
    </section>

    <section class="p-t-60 p-b-10 d-block d-md-none" style="background: #1f2020;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="text-align: center;">
                    <h3 class="t1-b-1 cl-0 m-b-11 custom-font-2">
                        CRAFTING
                    </h3>
                    <h3 class="t1-b-1 cl-0 m-b-11 custom-font-2">
                        NEW <span style="color: gold;">HORIZON</span>
                    </h3>
                </div>
                <div class="col-12 p-b-20" style="text-align: center;">
                    <img class="p-b-10" src="{{ asset('images/marc/developer/Marcs Website components-33.png') }}" width="200" alt="img_title"/>
                </div>
                <div class="col-12" style="text-align: center;">
                    <p class="cl-0" style="font-weight: 300;">
                        Initiated in 2009, PT Perintis Triniti Properti (Triniti Property Group) commenced its journey with its first
                        5-hectare land development project, Ubud Village, by the golden hands of the Founders, Septian Starlin,
                        Matius Jusuf, Bong Chandra, and Yohanes L. Andayaprana. Developments of iconic projects began since
                        2014 untill 2017, introducing thoughtful lands namely Brooklyn, Springwood Residence, Yukata Suites, The
                        Smith, and Collins Boulevard.
                    </p>
                    <br/>
                    <p class="cl-0" style="font-weight: 300;">
                        Four of its five properties were booked up to 90%, gaining more than hundreds
                        million US$ revenue in no time. The success brought Triniti Property Group emerged with a new face named
                        Triniti Land, while launching its Rp 5 trillion worth Superblock Project, Collins Boulevard, in 2018. Reaching its
                        9th year of building and innovating, Triniti Land plans to commence an Initial Public Offering (Go Public) and
                        create masterplans of building Township Development scale projects in Jakarta, Tangerang, and Batam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why chosse us -->
    <section class="p-t-60 p-b-10 d-none d-md-block" style="background: #1f2020;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="text-align: center;">
                    <h3 class="t1-b-1 cl-0 txt-left m-b-11 custom-font-2">
                        CRAFTING
                    </h3>
                    <h3 class="t1-b-1 cl-0 txt-left m-b-11 custom-font-2">
                        NEW <span style="color: #d1ac61;">HORIZON</span>
                    </h3>
                </div>
                <div class="col-lg-8">
                    <img class="p-b-10" src="{{ asset('images/marc/developer/Marcs Website components-33.png') }}" width="200" alt="img_title"/>
                    <p class="cl-0" style="text-align: justify; font-weight: 300;">
                        Initiated in 2009, PT Perintis Triniti Properti (Triniti Property Group) commenced its journey with its first
                        5-hectare land development project, Ubud Village, by the golden hands of the Founders, Septian Starlin,
                        Matius Jusuf, Bong Chandra, and Yohanes L. Andayaprana. Developments of iconic projects began since
                        2014 untill 2017, introducing thoughtful lands namely Brooklyn, Springwood Residence, Yukata Suites, The
                        Smith, and Collins Boulevard. Four of its five properties were booked up to 90%, gaining more than hundreds
                        million US$ revenue in no time. The success brought Triniti Property Group emerged with a new face named
                        Triniti Land, while launching its Rp 5 trillion worth Superblock Project, Collins Boulevard, in 2018. Reaching its
                        9th year of building and innovating, Triniti Land plans to commence an Initial Public Offering (Go Public) and
                        create masterplans of building Township Development scale projects in Jakarta, Tangerang, and Batam.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-t-60 p-b-10" style="background: #1f2020;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('images/marc/developer/Marcs Website update-35.png') }}" alt="img_title" style="width: 100%;"/>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="p-t-60 p-b-40 d-block d-md-none" style="background: #1f2020;">
        <div class="container">
            <div class="row cl-0">
                <div class="col-lg-3 col-sm-12 col-xs-12 p-b-20 text-center text-sm-center text-md-left">
                    <b>DEVELOPED PROJECTS</b> <br/>
                    -<br/>
                    JAKARTA & TANGERANG
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Ubud Village</b><br/>
                    Project Value 180 Billion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-20 text-center text-sm-center text-md-left">
                    <b>Melrose Place</b><br/>
                    Project Value 50 Billion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-20 text-center text-sm-center text-md-left">
                    <b>Brooklyn</b><br/>
                    Project Value 1.2 Trillion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-20 text-center text-sm-center text-md-left">
                    <b>Springwood Residence</b><br/>
                    Project Value 900 Billion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-20 text-center text-sm-center text-md-left">
                    <b>Yukata Suites</b><br/>
                    Project Value 900 Billion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-20 text-center text-sm-center text-md-left">
                    <b>The Smith</b><br/>
                    Project Value 1 Trillion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-20 p-b-20 text-center text-sm-center text-md-left">
                    <b>Collins Boulevard</b><br/>
                    Project Value 5 Trillion
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-40 text-center text-sm-center text-md-left">
                    <b>FUTURE DEVELOPMENT</b><br/>
                    -<br/>
                    BATAM
                </div>

                <div class="col-lg-3 col-sm-12 col-xs-12 p-t-30 text-center text-sm-center text-md-left">
                    <b>Marc’s Boulevard</b><br/>
                    Project Value 5 Trillion
                </div>
            </div>
        </div>
    </section>

    <section class="p-t-60 p-b-40 d-none d-md-block" style="background: #1f2020;">
        <div class="container">
            <div class="row cl-0">
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>DEVELOPED PROJECTS</b> <br/>
                    -<br/>
                    JAKARTA & TANGERANG
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12"></div>
                <div class="col-lg-3 col-sm-12 col-xs-12"></div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>FUTURE DEVELOPMENT</b><br/>
                    -<br/>
                    BATAM
                </div>
            </div>

            <div class="row cl-0 p-t-20">
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Ubud Village</b><br/>
                    Project Value 180 Billion
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Brooklyn</b><br/>
                    Project Value 1.2 Trillion
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Yukata Suites</b><br/>
                    Project Value 900 Billion
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Collins Boulevard</b><br/>
                    Project Value 5 Trillion
                </div>
            </div>

            <div class="row cl-0" style="margin-top: 20px;">
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Marc's Boulevard</b><br/>
                    Project Value 5 Trillion
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Melrose Place</b><br/>
                    Project Value 50 Billion
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>Springwood Residence</b><br/>
                    Project Value 900 Billion
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12 text-center text-sm-center text-md-left">
                    <b>The Smith</b><br/>
                    Project Value 1 Trillion
                </div>
            </div>
        </div>
    </section> --}}

    <section style="background-color: #1f2020;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('home') }}" class="btn btn-dark bg-custom-dark w-100 pt-3 pb-4" style="border-radius: 30px;">
                        <div class="mb-2"><span class="custom-font-1 t1-s-1">BACK TO</span></div>
                        <img id="back-navigation" src="{{ asset('images/marc/marc-back.png') }}">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection