@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Property developer">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>F.O.R - Developer</title>
@endsection

@section('content')

    <div class="row mb-2 for-mt-10">
        <div class="col-lg-12 col-md-12 px-1 text-center">
            <h1 class="text-custom-style text-custom-light-brown display-2">DEVELOPER</h1>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-12 col-md-12 px-md-1">
            <div class="card">
                <div class="card-body main-banner-responsive-short" style="background-image: url('{{ asset('images/frontend/developer/developer-main-banner.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-7 col-md-7 col-12 px-md-1">
            <div class="card">
                <div class="card-body bg-custom-black">
                    <div class="row mb-2">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="text-custom-style font-weight-bold pb-2 pb-md-0">
                                <span class="h1 text-white">FINELY CRAFTED<br/>BY</span>
                                <span class="h1 text-custom-light-brown">TRINITI LAND</span>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-12 text-white">
                            <p>Initiated in 2009, PT Perintis Triniti Properti (Trinity Property Group) commenced its journey with its first 5-hectare land development project, Ubud Village, by the golden hands of the Founders, Septian Starlin, Matius Jusuf, Bong Chandra, and Yohanes L. Andayaprana.
                                Developments of iconic projects began since 2014 until 2017, introducing thoughtful lands namely Brooklyn, Springwood Residence, Yukata Suites, The Smith, and Collins Boulevard.</p>
                            <p>Four of its five properties were booked up to 90%, gaining more than hundreds million US$ revenue in no time.
                                The success brought Triniti Property Group emerged with new face named Triniti Land, while launching its Rp 5 trillion worth Superblock Project, Collins Boulevard, in 2018.
                                Reaching its 9th year of building and innovating, Triniti land plans to commence an Initial Public Offering (Go Public) and create masterplans of building Township Development scale projects in Jakarta, Tangerang, and Batam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-12 px-md-1">
            <div class="card">
                <div class="card-body developer-image-responsive" style="background-image: url('{{ asset('images/frontend/developer/developer-1.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-4 col-md-4 col-12 px-md-1">
            <div class="card">
                <div class="card-body developer-image-responsive" style="background-image: url('{{ asset('images/frontend/developer/developer-2.jpg') }}');
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;">
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-12 px-md-1">
            <div class="card">
                <div class="card-body px-5 pt-4">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="text-custom-style font-weight-bold py-3">
                                <span class="h1">CRAFTING NEW </span>
                                <span class="h1 text-custom-light-brown">HORIZON</span>
                            </div>
                            <p>Architecture Trens are constantly changing over time, but not with Craftsmanship.
                                Through a detailed and comprehensive audit phase, we will always try our best to ensure that every constuction details can be finished and executed perfectly.
                                We want people to see the "unseed" through the stunning finishing touches made of high quality materials, by the best professionals in the industry.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <ul class="list-unstyled border-left bw-2 border-dark pl-3 font-weight-bold">
                                        <li>Brooklyn Apartment</li>
                                        <li>Springwood Residence</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <ul class="list-unstyled border-left bw-2 border-dark pl-3 font-weight-bold">
                                        <li>The Smith</li>
                                        <li>Yukata Suites</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <ul class="list-unstyled border-left bw-2 border-dark pl-3 font-weight-bold">
                                        <li>Collins Boulevard</li>
                                        <li>Marc's Boulevard</li>
                                    </ul>
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