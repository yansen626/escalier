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
        <div class="col-md-12 size-a-18 bg-img2 respon-3 header-img" style="background-image: url('{{ asset('images/marc/contact/Marcs Website components-51.jpg') }}');"></div>
    </section>

    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-6 p-b-60">
                    <div class="p-l-0 text-sm-center text-center">
                        <h3 class="t1-b-1 cl-3 m-b-11">
                            SEND US A MESSAGE
                        </h1>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 p-b-60">
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="row mb-2">
                            <div class="col-lg-12 col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ \Illuminate\Support\Facades\Session::get('success') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                    {{ Form::open(['route'=>['frontend.contact_us.save'],'method' => 'post','id' => 'contact-form', 'class'=>'validate-form']) }}

                        <div class="m-b-15 validate-input" data-validate = "Name is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="Your Name">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="Your Email">
                        </div>

                        <div class="m-b-15 validate-input" data-validate = "Subject is required">
                            <input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="subject" placeholder="Subject">
                        </div>

                        <div class="m-b-30 validate-input" data-validate = "Message is required">
                            <textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="Your Message"></textarea>
                        </div>

                        <button class="btn btn-dark">
                            Send
                        </button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
<div class="container">
            {{-- <div class="flex-col-c-c p-b-20">
                <div class="size-a-2 bg-3" style="width: 100%; height: 2px;"></div>
            </div> --}}
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('frontend.paul.introduction') }}" class="btn btn-dark bg-custom-dark w-100 pt-3 pb-4" style="border-radius: 30px;"><strong>BACK TO</strong><br/>
                        <img id="back-navigation" src="{{ asset('images/marc/marc-back.png') }}">
                    </a>
                </div>
            </div>
        </div> 
@endsection

@section('styles')
    <style type="text/css">
        .btn-dark{
            border-radius: 30%;
        }
        @media (max-width: 576px) {
            .centered {
                position: absolute;
                top: 80%;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 300px;
            }
        }

        @media (min-width: 768px) {

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
        }
    </style>
@endsection

@section('scripts')
    <script>
    </script>
@endsection