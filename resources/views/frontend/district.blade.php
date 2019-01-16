@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD</title>
@endsection

@section('content')

    <!-- About -->
    <section class="bg-0 flex-wr-s-st m-b-15-sr991">
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/districts/Marcs Website components-21.jpg') }}');"></div>
    </section>

    <section>
        <div class="container-fluid px-0 py-5">
            <!--  -->
            <div class="row justify-content-center mb-4">
                <div class="col-12 text-center">
                    <h1 class="t1-b-1" style="color:#000000;">WITHIN MARC'S BOULEVARD</h1>
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
                top: 40%;
                left: 50%;
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
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (min-width: 1200px) {
            .centered {
                position: absolute;
                top: 45%;
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

@section('scripts')
    <script>
    </script>
@endsection