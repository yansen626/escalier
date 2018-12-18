@extends('layouts.frontend')

@section('content')

    <div class="row mb-2 for-mt-10">
        <div class="col-lg-12 col-md-12 px-md-1 text-center">
            <h1>INTRODUCTION</h1>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 px-md-1">
            <div class="card">
                <div class="card-body main-banner-responsive-long" style="background-image: url('{{ asset('images/frontend/introduction/introduction-main-banner.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 px-md-1">
            <div class="card">
                <div class="card-body bg-custom-black text-white p-5">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mb-2 mb-sm-0">
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
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-3 col-md-3 col-12 px-md-1">
            <div class="card">
                <div class="card-body p-0">
                    <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/introduction/introduction-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                    <div class="w-100 p-3 bg-custom-black text-center text-white">
                        <h5>Work in Eminence</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-3 col-12 px-md-1">
            <div class="card">
                <div class="card-body p-0">
                    <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/introduction/introduction-2.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                    <div class="w-100 p-3 bg-custom-black text-center text-white">
                        <h5>Powered by Comfort</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12 px-md-1">
            <div class="card">
                <div class="card-body p-0">
                    <div class="w-100 image-general-responsive" style="background-image: url('{{ asset('images/frontend/introduction/introduction-3.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
                    </div>
                    <div class="w-100 p-3 bg-custom-black text-center text-white">
                        <h5>Affluential Living</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection