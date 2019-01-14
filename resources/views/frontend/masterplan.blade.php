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
        }
    </style>
@endsection

@section('content')

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3" style="background-image: url('{{ asset('images/frontend/vendor/other-03.jpg') }}'); min-height: 400px;"></div>
    </section>

    <!-- Why chosse us -->
    <section class="bg-0 p-t-60 p-b-10">
        <div class="container">
            <!-- Title section -->
            <div class="flex-col-c-c p-b-30">
                <h3 class="t1-b-1 cl-3 txt-center m-b-11">
                    MASTERPLAN
                </h3>
            </div>
        </div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-20">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 bg-3" style="width: 100%; height: 2px;"></div>
        <div class="col-lg-1"></div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 size-a-18 bg-img2 respon-3" style="background-image: url('{{ asset('images/frontend/vendor/other-01.jpg') }}');"></div>
        <div class="col-lg-1"></div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-20">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 bg-3" style="width: 100%; height: 2px;"></div>
        <div class="col-lg-1"></div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 size-a-18 bg-img2 respon-3" style="background-image: url('{{ asset('images/frontend/vendor/other-01.jpg') }}');"></div>
        <div class="col-lg-1"></div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-20">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 bg-3" style="width: 100%; height: 2px;"></div>
        <div class="col-lg-1"></div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 size-a-18 bg-img2 respon-3" style="background-image: url('{{ asset('images/frontend/vendor/other-01.jpg') }}');"></div>
        <div class="col-lg-1"></div>
    </section>

    <section class="bg-0 flex-wr-s-st m-b-15-sr991 p-t-30 p-b-20">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 bg-3" style="width: 100%; height: 2px;"></div>
        <div class="col-lg-1"></div>
    </section>
@endsection

@section('scripts')
    <script>
    </script>
@endsection