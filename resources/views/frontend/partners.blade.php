@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Home Page">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>PARTNERS</title>
@endsection

@section('content')

    <!-- Banner -->
    <section class="m-b-25">

        <div class="container-fluid p-0">
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-100" style="background-image: url('{{ asset('images/marc/partners/partners-1.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;
                            height: 250px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Work With -->
    <section>
        <div class="container">
            <!--  -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 class="t1-b-1 text-dark">WHO WE WORK WITH</h1>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 col-12 text-center border border-left-0 border-dark">
                    <div class="p-4">
                        <span>Master Planner</span><br/><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-1.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center border border-left-0 border-dark">
                    <div class="p-4">
                        <span>Brand Consultant</span><br/><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" width="250">
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center border border-right-0 border-left-0 border-dark">
                    <div class="p-4">
                        <span>Architect</span><br/><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
    </script>
@endsection