@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Escalier About Us">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Escalier, Property, Office, Residence, Apartment, House">

<title>ESCALIER - ABOUT US</title>
@endsection

@section('content')

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-5">
                <p class="custom-font-avenir-light text-center pb-2">ABOUT US</p>
                <p class="custom-font-playfair-displayregular text-center text-dark txt-trusted">TRUSTED WORK</p>
            </div>
            <div class="col-md-12 text-center">
                <img src="{{ asset('images/escalier/about/daftar-client.png') }}" class="img-client">
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles')
<style>
    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .txt-trusted {
        font-size: 30px;
    }

    .img-client {
        width: 300px;
        height: auto;
    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {

        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .txt-trusted {
            font-size: 50px;
        }

        .img-client {
            width: 800px;
            height: auto;
        }
    }

    @media (min-width: 992px) {}

    @media (min-width: 1200px) {}
</style>
@endsection

@section('scripts')
@endsection
