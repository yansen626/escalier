@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Location of F.O.R office">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Location</title>
@endsection

@section('content')

    <div class="row mb-2 for-mt-10">
        <div class="col-lg-12 col-md-12 px-1 text-center">
            <h1>LOCATION</h1>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 px-md-1 mb-2 mb-sm-0">
            <div class="card">
                <div class="card-body bg-custom-black">
                    <div class="text-custom-style font-weight-bold">
                        <span class="display-4 text-white">PRIME</span><br/>
                        <span class="display-4 text-custom-light-brown">LOCATION</span>
                    </div>
                    <hr class="d-inline-flex w-75 border-white"/>
                    <p class="text-white">F.O.R is a strategically placed in south tangerang's promising Gading Serpong district, putting you within an easy reach of your needs</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 px-md-1">
            <div class="card">
                <div class="card-body location-image-responsive" style="background-image: url('{{ asset('images/frontend/location/location-map-banner.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 px-md-1 col-12 mb-2 mb-sm-0 d-none d-md-block">
            <div class="card">
                <div class="card-body main-banner-responsive-short" style="background-image: url('{{ asset('images/frontend/location/location-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-12 px-md-1">
            <div class="card">
                <div class="card-body bg-custom-brown text-white p-5">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 px-1">
                            <dl class="row mb-0 mb-md-2">
                                <dt class="col-3 text-right">A</dt>
                                <dd class="col-9">Summarecon Mall Serpong</dd>

                                <dt class="col-3 text-right">B</dt>
                                <dd class="col-9">OMNI Hospital</dd>

                                <dt class="col-3 text-right">C</dt>
                                <dd class="col-9">Mercure Hotel</dd>

                                <dt class="col-3 text-right">D</dt>
                                <dd class="col-9">Living World Mall</dd>

                                <dt class="col-3 text-right">E</dt>
                                <dd class="col-9">St. Laurensia School</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pl-1">
                            <dl class="row">
                                <dt class="col-3 text-right">F</dt>
                                <dd class="col-9">Pet Kingdom</dd>

                                <dt class="col-3 text-right">G</dt>
                                <dd class="col-9">Binus University</dd>

                                <dt class="col-3 text-right">H</dt>
                                <dd class="col-9">Mall @ Alam Sutera</dd>

                                <dt class="col-3 text-right">I</dt>
                                <dd class="col-9">IKEA</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 col-12 px-md-1 mb-2 mb-sm-0">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-custom-style">
                                <span class="h1 font-weight-bold">WHAT </span><span class="h1 text-custom-light-brown font-weight-bold">TANGERANG</span><br/>
                                <span class="h1 font-weight-bold">HAS TO OFFER</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-6 pr-1">
                    <div class="card">
                        <div class="card-body bg-custom-black p-3">
                            <div class="text-custom-style p-1">
                                <span class="h1 text-white font-weight-bold">23</span><br/>
                                <span class="h1 text-custom-light-brown font-weight-normal">HOSPITAL</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-6 pl-1">
                    <div class="card">
                        <div class="card-body" style="background-image: url('{{ asset('images/frontend/location/location-2.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                                height: 169px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 px-md-1 mb-2 mb-sm-0">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body" style="background-image: url('{{ asset('images/frontend/location/location-3.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                                height: 220px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body bg-custom-black p-3">
                            <div class="text-custom-style p-1">
                                <span class="h1 text-white font-weight-bold">55 </span>
                                <span class="h1 text-custom-light-brown font-weight-normal">SHOPPING CENTERS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 px-md-1">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body bg-custom-black p-3">
                            <div class="text-custom-style p-1">
                                <span class="h1 text-white font-weight-bold">27 </span>
                                <span class="h1 text-custom-light-brown font-weight-normal">SCHOOLS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-body" style="background-image: url('{{ asset('images/frontend/location/location-4.jpg') }}');
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                                height: 220px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection