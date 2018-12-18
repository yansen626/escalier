@extends('layouts.frontend')

@section('content')

    <div class="row mb-2" style="margin-top: 10em;">
        <div class="col-lg-4 col-md-4 col-4 px-1">
            <div class="card">
                <div class="card-body bg-custom-light-brown">
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
                <div class="card-body bg-custom-black">
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
                <div class="card-body" style="background-image: url('{{ asset('images/frontend/plan-master/plan-master-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                        height: 550px;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 col-12 p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-12 p-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        </div>
    </div>


    <!-- /.row -->
@endsection