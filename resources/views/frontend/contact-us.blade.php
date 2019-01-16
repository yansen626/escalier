@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Contact data of F.O.R">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Contact Us</title>
@endsection

@section('content')

    <div class="row mb-2 for-mt-10">
        <div class="col-lg-12 col-md-12 px-1 text-center">
            <h1 class="text-custom-style text-custom-light-brown display-2">CONTACT US</h1>
        </div>
    </div>

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="row mb-2">
            <div class="col-lg-12 col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    {{ Form::open(['route'=>['frontend.contact_us.save'],'method' => 'post','id' => 'general-form']) }}
        <div class="row mb-2">
            <div class="col-lg-6 col-md-6 col-xs-12 mb-2 mb-md-0">
                <input class="form-control" type="text" name="name" id="name" placeholder="Your Name"/>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <input class="form-control" type="email" name="email" id="email" placeholder="Your Email"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <textarea class="form-control" id="message" placeholder="Your Message" name="message" rows="7"></textarea>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <input type="submit" class="btn col-lg-12 col-md-12 col-xs-12 bg-custom-light-brown text-white font-weight-bold" style="border-radius: 0;" value="Send a Message"/>
            </div>
        </div>
    {{ Form::close() }}
@endsection

@section('styles')
    <style>
        .form-control { border-radius: 0; }
        .form-control::-webkit-input-placeholder { color: #d9d9d9; }  /* WebKit, Blink, Edge */
        .form-control:-moz-placeholder { color: #d9d9d9; }  /* Mozilla Firefox 4 to 18 */
        .form-control::-moz-placeholder { color: #d9d9d9; }  /* Mozilla Firefox 19+ */
        .form-control:-ms-input-placeholder { color: #d9d9d9; }  /* Internet Explorer 10-11 */
        .form-control::-ms-input-placeholder { color: #d9d9d9; }  /* Microsoft Edge */
    </style>
@endsection