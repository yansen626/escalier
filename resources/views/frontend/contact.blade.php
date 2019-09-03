@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Escalier Contact Us">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Escalier, Interior, Office, Residential, Apartment, Commercial, Spaces">

<title>ESCALIER - CONTACT US</title>
@endsection

@section('content')

<section>
    <div class="row no-gutters" style="margin-top:-5%;">
        <div class="col-12">
            <div class=" w-100 header-img" style="background-image: url('{{ asset('images/escalier/contact/header-contact-us.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;">
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <p class="t1-b-1 custom-font-playfair-displayregular text-dark mb-5 txt-header-contact">CONTACT US</p>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 col-12 mb-4 mb-md-0">
                <p class="custom-font-avenir-medium text-dark pb-4 txt-subheader-contact">Head Office</p>
                <p class="custom-font-avenir-light">RJS 29 C No. 3 Dynasty Walk<br />
                    Alam Sutera Tangerang, Banten</p>
            </div>
            <div class="col-md-4 col-12">
                <p class="custom-font-avenir-medium text-dark pb-4 txt-subheader-contact">Workshop</p>
                <p class="custom-font-avenir-light">Workshop Kawasan Industri Agarindo No. 168<br />
                    Ds Bunder Cikupa Pasar Kemis Kec. Tangerang,<br />
                    Banten 15710</p>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <p class="custom-font-avenir-light">@escalierinterior</p>
                <div class="col-md-8"></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 col-12">
                <p class="custom-font-avenir-light">escalier-studio.com<br />
                    info@escalierstudio.com<br />
                    0878 8767 6300<br />
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>

    .txt-subheader-contact{
        font-size: 18px;
    }

    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .txt-header-contact {
        font-size: 30px;
        text-align: center;
        margin-bottom: 50px;
    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .txt-header-contact {
            font-size: 30px;
            text-align: left;
            margin-bottom: 50px;
        }
    }

    @media (min-width: 992px) {}

    @media (min-width: 1200px) {
        .header-img {
            min-height: 500px;
        }
    }
</style>
@endsection

@section('scripts')
@endsection
