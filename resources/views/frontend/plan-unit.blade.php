@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Unit Plan">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Unit Plan</title>
@endsection

@section('content')

    <div class="row mb-2 for-mt-10" id="plan-menu">
        <div class="col-lg-4 col-md-4 col-4 pr-1 pl-md-1">
            <div class="card">
                <div class="card-body bg-custom-black p-2 p-md-3">
                    <a href="{{ route('frontend.plan.master') }}" style="text-decoration: none;">
                        <div class="h-100px">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                <div class="text-custom-style text-white">
                                    <h1>PLACEMENT</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 px-1">
            <div class="card">
                <div class="card-body bg-custom-black p-2 p-md-3">
                    <a href="{{ route('frontend.plan.floor') }}" style="text-decoration: none;">
                        <div class="h-100px">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                <div class="text-custom-style text-white">
                                    <h1>FLOOR PLAN</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-4 pl-1 pr-md-1">
            <div class="card">
                <div class="card-body bg-custom-light-brown p-2 p-md-3">
                    <a href="{{ route('frontend.plan.unit') }}" style="text-decoration: none;">
                        <div class="h-100px">
                            <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                <div class="text-custom-style text-white">
                                    <h1>UNIT PLAN</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 pr-md-1">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12 px-md-1">
                            <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/plan-unit/plan-unit-1.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 px-md-1">
                            <div class="w-100 unit-plan-blueprint-responsive" style="background-image: url('{{ asset('images/frontend/plan-unit/plan-unit-2.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 pr-md-1">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12 px-md-1">
                            <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/plan-unit/plan-unit-3.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 px-md-1">
                            <div class="w-100 unit-plan-blueprint-responsive" style="background-image: url('{{ asset('images/frontend/plan-unit/plan-unit-4.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 pr-md-1">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12 px-md-1">
                            <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/plan-unit/plan-unit-5.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 px-md-1">
                            <div class="w-100 unit-plan-blueprint-responsive" style="background-image: url('{{ asset('images/frontend/plan-unit/plan-unit-6.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: contain;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
@endsection