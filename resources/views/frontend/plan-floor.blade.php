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
                                    <h1>MASTER</h1>
                                    <h1>PLAN</h1>
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
                                    <h1>FLOOR</h1>
                                    <h1>PLAN</h1>
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
                                    <h1>UNIT</h1>
                                    <h1>PLAN</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2 text-justify">
        <div class="col-lg-12 col-md-12 col-12 px-3 py-2 p-md-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 px-md-1">
            <div class="card">
                <div class="card-body main-banner-responsive-long" style="background-image: url('{{ asset('images/frontend/plan-floor/plan-floor-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 px-md-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 pr-1">
                            <div class="row mb-2 mb-md-5">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <dl class="row">
                                                <dt class="col-sm-3">A</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>

                                                <dt class="col-sm-3">B</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>

                                                <dt class="col-sm-3">C</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>

                                                <dt class="col-sm-3">D</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>
                                            </dl>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <dl class="row">
                                                <dt class="col-sm-3">E</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>

                                                <dt class="col-sm-3">F</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>

                                                <dt class="col-sm-3">G</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>

                                                <dt class="col-sm-3">H</dt>
                                                <dd class="col-sm-9">Lorem ipsum</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/plan-floor/plan-floor-2.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
@endsection