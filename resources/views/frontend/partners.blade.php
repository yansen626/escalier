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
                    <div class="p-5">
                        <span>Master Planner</span><br/><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-1.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center border border-left-0 border-dark">
                    <div class="p-5">
                        <span>Brand Consultant</span><br/><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" width="250">
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center border border-right-0 border-left-0 border-dark">
                    <div class="p-5">
                        <span>Architect</span><br/><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 col-12 border border-left-0 border-top-0 border-dark">
                    <div class="p-5">
                        <img src="{{ asset('images/marc/partners/partner-brand-1.png') }}" class="mx-auto" width="130">
                        <br/>
                        <br/>
                        <p>
                            AECOM is a global network of experts working with
                            clients, communities and colleagues to develop and
                            implement innovative solutions to the world’s most
                            complex challenges.
                        </p>
                    </div>
                </div>
                <div class="col-md-8 col-12 border border-left-0 border-right-0 border-top-0 border-dark">
                    <div class="p-5">
                        <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-2.jpg') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span>Miami World Center - Paramount Tower</span><br/>
                                    <span>Florida</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-3.jpg') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span>Marina Bay and Greater Southern Waterfront</span><br/>
                                    <span>Singapore</span>
                                </p>
                            </div>
                        </div>
                        <hr class="border-dark"/>
                        <div class="row">
                            <div class=" col-md-5 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-4.jpg') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12">
                                <h1 class="t1-m-1">Marc’s Boulevard - Master Planner Message</h1>
                                <br/>
                                <p>
                                    Aiming to elevate the quality and character of Batam City, Marc’s
                                    Boulevard merges multiple facets of urban life into a concentrated
                                    hub of urban activities. Combining residential, commercial, business,
                                    and entertainment, into an exciting “Mixed-Use” destination. Thus
                                    bringing excitement into this near-waterfront development where
                                    each block is carefully crafted to integrate nature and urban living.
                                </p>
                                <br/>
                                <p>
                                    Marc’s Boulevard gives you the pleasure of living with nature while
                                    being conveniently close to the city center, an oasis in the future
                                    expansion of a bustling urban center.
                                </p>
                                <br/>
                                <h1 class="t1-m-1">Sacha Schwarzkopf</h1>
                                <p>Director of Urban Design, AECOM Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters mb-5">
                <div class="col-md-4 col-12 text-center border border-top-0 border-left-0 border-dark">
                    <div class="p-5">
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-8 col-12 border border-top-0 border-left-0 border-right-0 border-dark">
                    <div class="p-5">
                        <div class="row">
                            <div class=" col-md-5 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-5.jpg') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12">
                                <h1 class="t1-m-1">Marc’s Boulevard - Architect Message</h1>
                                <br/>
                                <p>
                                    Marc’s Boulevard focused to be next Batam’s destination landmark
                                    development that provides high quality living spaces integrated with
                                    large open green areas, where the resident’s life is balanced
                                    between work and daily activities. The design delivers a simple yet
                                    distinctive architecture alongside with combination of carefully
                                    chosen materials, it creates a luxury living development. It is
                                    resort-like living with excellent amenities. The lush landscape forms
                                    an invisible boundary between the buildings and the nature.
                                </p>
                                <br/>
                                <h1 class="t1-m-1">Raval Kapusta</h1>
                                <p>Founding Director, OOZN Design</p>
                            </div>
                        </div>
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