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
                <p class="text-center pb-2">ABOUT US</p>
                <p class="text-center t1-b-1 custom-font-2 text-dark txt-trusted">TRUSTED WORK</p>
            </div>
            <div class="col-md-12 text-center">
                <img src="{{ asset('images/escalier/about/daftar-client.png') }}" class="img-client">
            </div>
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
        .txt-trusted {
            font-size: 30px;
        }

        .img-client {
            width: 300px;
            height: auto;
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
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