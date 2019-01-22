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
            .map-img{
                min-height: 1000px;
                background-size: contain;
            }

            .min-img{
                background-size: 96% 100%;
                min-height: 150px;
            }

            .build-img{
                background-size: contain;
                min-height: 150px;
            }

            .header-img{
                background-size: 100% 100%;
                min-height: 50px;
            }
        }

        @media (min-width: 768px) {
            .map-img{
                background-size:contain;
            }
        }

        @media (max-width: 992px) {
        }

        @media (min-width: 1024px) {
            .map-img{
                height: 515px;
                background-size:contain;
            }

            .min-img{
                background-size: 684px 400px;
                min-height: 400px;
            }

            .build-img{
                background-size: 684px 400px;
                min-height: 400px;
            }

            .header-img{
                background-size: 100% 100%;
                min-height: 200px;
            }
        }

        @media (min-width: 1200px) {
            .map-img{
                height: 740px;
                background-size:contain;
            }

            .min-img{
                height: 500px;
                background-size:contain;
            }

            .build-img{
                height: 440px;
                background-size:contain;
            }

            .header-img{
                background-size: 100% 100%;
                min-height: 350px;
            }
        }
    </style>
@endsection

@section('content')

    <!-- Masterplan -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-35.jpg') }}');"></div>
    </section>

    <!-- Why chosse us -->
    <section class="bg-0 p-t-60 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-30">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11 custom-font-2">
                    MASTERPLAN
                </h3>
            </div>
        </div>
    </section>

    {{--<!-- Mobile -->--}}
    <section class="bg-0 p-t-30 p-b-30 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="height: 2px;"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <section class="bg-0 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-img2 respon-3" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-36.jpg') }}');"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 size-a-18 bg-img2 respon-3 map-img" style="background-image: url('{{ asset('images/marc/masterplan/MARCS Website Mobile med-07.jpg') }}');"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 size-a-18 bg-img2 respon-3 min-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-38.jpg') }}');"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-block d-md-none">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-1"></div>
        </div>
    </section>

    <!-- Mobile Finish -->

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 size-a-18 bg-img2 respon-3 build-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-36.jpg') }}');"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2 col-sm-1"></div>
            <div class="col-lg-8 col-sm-10 size-a-18 bg-img2 respon-3 map-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-37.jpg') }}');"></div>
            <div class="col-lg-2 col-sm-1"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 size-a-18 bg-img2 respon-3 min-img" style="background-image: url('{{ asset('images/marc/masterplan/Marcs Website components-38.jpg') }}');"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-30 d-none d-md-block">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 bg-3" style="width: 100%; height: 2px;"></div>
            <div class="col-lg-2"></div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection