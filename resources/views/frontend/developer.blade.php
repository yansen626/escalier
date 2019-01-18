@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Developer">
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
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/developer/Marcs Website components-30.jpg') }}');"></div>
    </section>

    <!-- Why chosse us -->
    <section class="bg-1 p-t-60 p-b-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="t1-b-1 cl-0 txt-left m-b-11 custom-font-2">
                        CRAFTING
                    </h3>
                    <h3 class="t1-b-1 cl-0 txt-left m-b-11 custom-font-2">
                        NEW <span style="color: gold;">HORIZON</span>
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

    <section class="bg-1 p-t-60 p-b-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('images/marc/developer/Marcs Website components-32.png') }}" alt="img_title" style="width: 100%;"/>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-1 p-t-60 p-b-40">
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
    </section>
    <div class="size-a-2 bg-0" style="width: 100%; height: 2px;"></div>
@endsection

@section('scripts')
    <script>
    </script>
@endsection