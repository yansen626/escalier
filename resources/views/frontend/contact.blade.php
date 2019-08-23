@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Escalier Contact Us">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Escalier, Property, Office, Residence, Apartment, House">

<title>ESCALIER - CONTACT US</title>
@endsection

@section('content')

<div class="row no-gutters" style="margin-top:-5%;">
    <div class="col-12">
        <div class=" w-100 header-img" style="background-image: url('{{ asset('images/escalier/contact/header-contact-us.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
        </div>
    </div>
</div>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12">
                <p class="t1-b-1 custom-font-2 text-dark mb-5 txt-header-contact">CONTACT US</p>
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 head-office">
                <p class="font-weight-bold text-dark pb-2">Head Office</p>
                <p>RJS 29 C No. 3 Dynasty Walk<br />
                    Alam Sutera Tangerang, Banten</p>
            </div>
            <div class="col-md-4 head-office d-none d-md-block">
                <p class="font-weight-bold text-dark pb-2">Workshop</p>
                <p>Workshop Kawasan Industri Agarindo No. 168<br />
                    Ds Bunder Cikupa Pasar Kemis Kec. Tangerang,<br />
                    Banten 15710</p>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row my-3">
            <div class="col-md-4">
                <p>@escalierinterior</p>
                <div class="col-md-8"></div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 col-12">
                <p>escalier-studio.com<br />
                    info@escalierstudio.com<br />
                    0878 8767 6300<br />
            </div>
            <div class="col-md-8"></div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4 head-office d-block d-md-none">
                <p class="font-weight-bold text-dark pb-2">Workshop</p>
                <p>Workshop Kawasan Industri Agarindo No. 168<br />
                    Ds Bunder Cikupa Pasar Kemis Kec. Tangerang,<br />
                    Banten 15710</p>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
<style>
    /* .carousel-control-prev {
            filter: invert(100%);
        }
        .carousel-control-next {
            filter: invert(100%);
        } */

    .img-banner-responsive {
        height: 500px;
    }

    .img-house-responsive {
        height: 400px;
    }

    .img-paulmarc-responsive {
        height: 100px;
        width: auto;
    }

    .img-trinity-responsive {
        margin-top: 0;
        height: 30px;
        width: auto;

    }

    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .m-b-50 {
        margin-bottom: 25px;
    }

    .text-finely-crafted {
        font-size: 10px;
        font-weight: bold;
    }

    /*.slick-dots li button:before {*/
    /*color: #fff;*/
    /*}*/

    /*.slick-dots li.slick-active button:before {*/
    /*color: #fff !important;*/
    /*}*/
    @media (max-width: 576px) {
        .txt-header-contact {
            font-size: 30px;
            text-align: center;
            margin-bottom: 50px;
        }

        .head-office {
            margin-bottom: 10px;
        }
    }


    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .img-banner-responsive {
            height: 550px;
        }

        .img-house-responsive {
            height: 600px;
        }

        .img-paulmarc-responsive {
            height: 200px;
            width: auto;
        }

        .img-trinity-responsive {
            margin-top: -28px;
            height: 45px;
            width: auto;
        }

        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .m-b-50 {
            margin-bottom: 50px;
        }

        .text-finely-crafted {
            font-size: 13px;
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js">
</script>
<script>
    $('.slider-within').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            variableWidth: true,
            arrows: true
        });
</script>
@endsection