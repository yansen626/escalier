@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Features of F.O.R">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Features</title>
@endsection

@section('content')

    <div class="row mb-2 for-mt-10">
        <div class="col-lg-12 col-md-12 px-md-1 text-center">
            <h1 class="text-custom-style text-custom-light-brown display-2">FEATURES</h1>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-8 col-md-8 col-12 px-md-1 mb-2 mb-md-0">
            <div class="card">
                <div class="card-body feature-main-banner-responsive" style="background-image: url('{{ asset('images/frontend/features/features-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 px-md-1">
            <div class="card">
                <div class="card-body bg-custom-black">
                    <div class="feature-main-banner-responsive">
                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                            <div class="text-custom-style text-white">
                                <h1>BUSINESS LOUNGE </h1>
                                <h1>ON EVERY FLOOR</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6 col-12 px-md-1 mb-2 mb-md-0">
            <div class="card">
                <div class="card-body image-general-responsive" style="background-image: url('{{ asset('images/frontend/features/features-2.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 px-md-1">
            <div class="card">
                <div class="card-body image-general-responsive" style="background-image: url('{{ asset('images/frontend/features/features-3.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6 col-12 px-md-1 mb-2 mb-md-0">
            <div class="card">
                <div class="card-body py-2 bg-custom-black text-custom-style text-white text-center">
                    <h3>WINDOW FACADE WITH</h3>
                    <h3>LOW-E GLASS</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 px-md-1">
            <div class="card">
                <div class="card-body py-2 bg-custom-black text-custom-style text-white text-center">
                    <h3>FRAME GLASS DOOR WITH</h3>
                    <h3>SMART LOCK SYSTEM</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 col-4 pr-1 pl-md-1">
            <div class="card">
                <div class="card-body feature-image-responsive" style="background-image: url('{{ asset('images/frontend/features/features-4.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 px-1">
            <div class="card">
                <div class="card-body feature-image-responsive" style="background-image: url('{{ asset('images/frontend/features/features-5.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 pl-1 pr-md-1">
            <div class="card">
                <div class="card-body feature-image-responsive" style="background-image: url('{{ asset('images/frontend/features/features-6.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 col-4 pr-1 pl-md-1">
            <div class="card">
                <div class="card-body feature-image-responsive" style="background-image: url('{{ asset('images/frontend/features/features-2.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 px-1">
            <div class="card">
                <div class="card-body feature-image-responsive" style="background-image: url('{{ asset('images/frontend/features/features-7.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 pl-1 pr-md-1">
            <div class="card">
                <div class="card-body feature-image-responsive" style="background-image: url('{{ asset('images/frontend/features/features-8.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection