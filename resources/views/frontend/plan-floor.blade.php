@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Floor Plan">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Floor Plan</title>
@endsection

@section('content')

    <div class="row mb-2 for-mt-10">
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
                <div class="card-body bg-custom-light-brown p-2 p-md-3">
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
                <div class="card-body bg-custom-black p-2 p-md-3">
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
        <div class="col-lg-12 col-md-12 col-12 px-md-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-12 px-1 mb-md-0 mb-3">
                            <div class="w-100 floor-plan-banner-responsive" style="background-image: url('{{ asset('images/frontend/plan-floor/plan-floor-2.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 px-1">
                            <div class="row">
                                <div class="col-12">
                                    <dl class="row mb-0 mb-md-5">
                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/huruf-a.png') }}" height="22"  alt="huruf-a"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">F.O.R. </span>
                                            <span>Main Lobby</span>
                                        </dd>

                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/huruf-b.png') }}" height="22"  alt="huruf-b"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">F.O.R. </span>
                                            <span>Business Lounge</span>
                                        </dd>

                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/huruf-c.png') }}" height="22"  alt="huruf-c"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">F.O.R. </span>
                                            <span>Entrance From Parking</span>
                                        </dd>

                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/huruf-d.png') }}" height="22"  alt="huruf-d"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">F.O.R. </span>
                                            <span>Public Storage</span>
                                        </dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/warna-1.png') }}" height="22"  alt="huruf-a"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">TYPE A </span>
                                            <span>(85,10 Sqm)</span>
                                        </dd>

                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/warna-2.png') }}" height="22"  alt="huruf-b"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">TYPE B </span>
                                            <span>(81,08 Sqm)</span>
                                        </dd>

                                        <dt class="col-3 text-right">
                                            <img src="{{ asset('images/frontend/plan-floor/warna-3.png') }}" height="22"  alt="huruf-c"/>
                                        </dt>
                                        <dd class="col-9 pl-1">
                                            <span class="font-weight-bold">TYPE C </span>
                                            <span>(57,84 Sqm)</span>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
@endsection