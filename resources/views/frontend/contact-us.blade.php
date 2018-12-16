@extends('layouts.frontend-grey')

@section('content')
    <div class="row mb-2" style="margin-top: 6rem;">
        <div class="mapouter col-lg-12 col-md-12">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=brooklyn%20alam%20sutera&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <a href="https://www.pureblack.de/webdesign-kiel/"></a>
            </div>
            <style>.mapouter{text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
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

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12">
            <h1 style="font-stretch: ultra-condensed; font-family: sans-serif; color: #A16247; text-align: center">CONTACT US</h1>
        </div>
    </div>

    {{ Form::open(['route'=>['frontend.contact_us.save'],'method' => 'post','id' => 'general-form']) }}
        <div class="row mb-2">
            <div class="col-lg-6 col-md-6 col-xs-12">
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
                <input type="submit" class="btn col-lg-12 col-md-12 col-xs-12" style="background-color: #A16247;
                color: white; font-weight: 800; border-radius: 0;" value="Send a Message"/>
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