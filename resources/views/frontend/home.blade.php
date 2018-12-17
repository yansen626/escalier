@extends('layouts.frontend')

@section('content')
    <!-- Jumbotron Header -->
    {{--<header class="jumbotron my-4">--}}
        {{--<h1 class="display-3">A Warm Welcome!</h1>--}}
        {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>--}}
        {{--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>--}}
    {{--</header>--}}

    <div class="row mb-2" style="margin-top: 10em;">
        <div class="col-lg-9 col-md-9 px-1">
            <div class="card">
                <div class="card-body" style="background-image: url('{{ asset('images/frontend/home/home-main-banner.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover">

                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 px-1">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body bg-custom-black text-white">
                            <h5>Facede Design</h5><br/>
                            <hr class="d-inline-flex w-50 border-white"/>
                            <p>Lorem ipsum dolor sit amet unvalor unum equi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>Grand Launching</h5><br/>
                            <hr class="d-inline-flex w-50 border-dark"/>
                            <p>Lorem ipsum dolor sit amet unvalor unum equi</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body bg-custom-brown text-white">
                            <h5>New Payment Method</h5><br/>
                            <hr class="d-inline-flex w-50 border-white"/>
                            <p>Lorem ipsum dolor sit amet unvalor unum equi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-9 col-md-9 px-1">
            <div class="card">
                <div class="card-body bg-custom-black text-white p-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="w-100 border-top border-bottom border-white text-custom-style">
                                <span class="display-4">FIRST</span><br/>
                                <span class="display-4">AND</span><br/>
                                <span class="display-4 text-custom-light-brown">F.O.R.</span><span class="display-4">EMOST</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-12">
                            <p><b>Pioneers are individuals reaching to secede from the status quo</b></p>
                            <p>Breaking new ground in the field of "Small Office Home Office" is the latest launch by Triniti Land</p>
                            <p>True to its entrepreneurial roots and inspired by the ideology of pioneership, F.O.R by Triniti Land is sophisticated yet functional.
                                Exquisitely designed, merging inspiration and architecture, this is for those who dream of taking humble beginnings to greater levels of success</p>
                        </div>
                    </div>
                    <div class="w-25 position-custom-bottom-left bg-custom-brown p-2 text-center d-none d-sm-block">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-4">
                                <span><b>Learn More</b></span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4">
                                <a href="{{ route('frontend.introduction') }}">
                                    <img src="{{ asset('images/frontend/arrow.png') }}" height="30"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 px-1">
            <div class="card">
                <div class="card-body" style="background-image: url('{{ asset('images/frontend/home/home-2.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-6 col-md-6 px-1">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 pr-1">
                            <div class="card">
                                <div class="card-body bg-custom-brown">
                                    <div style="height: 200px;">
                                        <div class="box h-100 d-flex justify-content-center flex-column text-center">
                                            <a href="{{ route('frontend.developer') }}">
                                                <img src="{{ asset('images/frontend/arrow.png') }}" height="75">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 pl-1">
                            <div class="card">
                                <div class="card-body text-right">
                                    <div class="text-custom-style font-weight-bold">
                                        <span class="display-4">ABOUT</span><br/>
                                        <span class="display-4 text-custom-light-brown">DEVELOPER</span>
                                    </div>
                                    <hr class="d-inline-flex flex-row-reverse w-50 border-dark"/>
                                    <p>Finely Crafted By Triniti Land</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-9 pr-1">
                            <div class="card">
                                <div class="card-body text-right bg-custom-black">
                                    <div class="text-custom-style font-weight-bold">
                                        <span class="display-4 text-white">PRIME</span><br/>
                                        <span class="display-4 text-custom-light-brown">LOCATION</span>
                                    </div>
                                    <hr class="d-inline-flex flex-row-reverse w-50 border-white"/>
                                    <p class="text-white">Strategically placed<br/>in a mature location</p>
                                    <div class="position-custom-bottom-left bg-custom-brown p-2 text-center d-none d-sm-block" style="width: 70%">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-3">
                                                <span class="text-white"><b>Check Our Location</b></span>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-3">
                                                <a href="{{ route('frontend.location') }}">
                                                    <img src="{{ asset('images/frontend/arrow.png') }}" height="30"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-3 pl-1">
                            <div class="card">
                                <div class="card-body" style="background-image: url('{{ asset('images/frontend/home/home-3.jpg') }}');
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        background-size: cover;
                                        height: 300px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 px-1">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body" style="background-image: url('{{ asset('images/frontend/home/home-video.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                                height: 370px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-8 pr-1">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Ground Breaking Video</h5>
                                    <h5>12.12.2018</h5>
                                    <hr class="d-inline-flex w-50 border-dark"/>
                                    <p>Lorem ipsum dolor sit amet unvalor unum equi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4 pl-1">
                            <div class="card">
                                <div class="card-body bg-custom-black">
                                    <div class="text-custom-style font-weight-bold">
                                        <span class="h1 text-white">WHY</span><br/>
                                        <span class="h1 text-custom-light-brown">FOR</span>
                                    </div>
                                    <div class="w-75 position-custom-bottom-right bg-custom-brown p-2 text-center text-white d-none d-sm-block">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 col-6">
                                                <span><b>Find Out</b></span>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-6">

                                                <a href="{{ route('frontend.introduction') }}">
                                                    <img src="{{ asset('images/frontend/arrow.png') }}" height="30"/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
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