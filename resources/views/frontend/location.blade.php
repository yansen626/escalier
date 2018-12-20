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
            <h1 class="text-custom-style text-custom-light-brown display-2">LOCATION</h1>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 px-md-1 mb-2 mb-sm-0">
            <div class="card">
                <div class="card-body bg-custom-black location-image-responsive">
                    <div class="box h-100 d-flex justify-content-center flex-column">
                        <div class="text-custom-style font-weight-bold">
                            <span class="display-4 text-white">PRIME</span><br/>
                            <span class="display-4 text-custom-light-brown">LOCATION</span>
                        </div>
                        <hr class="d-inline-flex border-white w-75 ml-0"/>
                        <p class="text-white">F.O.R is a strategically placed in south tangerang's promising Gading Serpong district, putting you within an easy reach of your needs</p>
                    </div>
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
                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-a.png') }}" height="22"  alt="huruf-a"/>
                                </dt>
                                <dd class="col-9 pl-1">Summarecon Mall Serpong</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-b.png') }}" height="22"  alt="huruf-b"/>
                                </dt>
                                <dd class="col-9 pl-1">OMNI Hospital</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-c.png') }}" height="22"  alt="huruf-c"/>
                                </dt>
                                <dd class="col-9 pl-1">Mercure Hotel</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-d.png') }}" height="22"  alt="huruf-d"/>
                                </dt>
                                <dd class="col-9 pl-1">Living World Mall</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-e.png') }}" height="22"  alt="huruf-e"/>
                                </dt>
                                <dd class="col-9 pl-1">St. Laurensia School</dd>
                            </dl>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 pl-1">
                            <dl class="row">
                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-f.png') }}" height="22"  alt="huruf-f"/>
                                </dt>
                                <dd class="col-9 pl-1">Pet Kingdom</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-g.png') }}" height="22"  alt="huruf-g"/>
                                </dt>
                                <dd class="col-9 pl-1">Binus University</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-h.png') }}" height="22"  alt="huruf-h"/>
                                </dt>
                                <dd class="col-9 pl-1">Mall @ Alam Sutera</dd>

                                <dt class="col-3 text-right">
                                    <img src="{{ asset('images/frontend/huruf/huruf-i.png') }}" height="22"  alt="huruf-i"/>
                                </dt>
                                <dd class="col-9 pl-1">IKEA</dd>
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