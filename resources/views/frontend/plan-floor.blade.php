@extends('layouts.frontend')

@section('content')

    <div class="row mb-2" style="margin-top: 10em;">
        <div class="col-lg-4 col-md-4 col-4 px-1">
            <div class="card">
                <div class="card-body bg-custom-black">
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
                <div class="card-body bg-custom-light-brown">
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
        <div class="col-lg-4 col-md-4 col-4 px-1">
            <div class="card">
                <div class="card-body bg-custom-black">
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

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 px-1">
            <div class="card">
                <div class="card-body" style="background-image: url('{{ asset('images/frontend/plan-floor/plan-floor-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                        height: 550px;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 col-12 px-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4 pr-1">
                            <div class="row mb-5">
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
                                        <div class="col-lg-6 col-md-46col-6">
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
                        <div class="col-lg-8 col-md-8 col-8">
                            <div class="w-100" style="background-image: url('{{ asset('images/frontend/plan-floor/plan-floor-2.jpg') }}');
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    background-size: cover;
                                    height: 400px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.row -->
@endsection