@extends('layouts.frontend')

@section('head_and_title')
    <meta name="description" content="Partners">
    <meta name="author" content="PT. Generasi Muda Gigih">
    <meta name="keywords" content="Property, Office, Residence, Apartment, House">

    <title>MARCS BOULEVARD - PARTNERS</title>
@endsection

@section('content')

    <!-- Banner -->
    <section class="m-b-25">

        <div class="container-fluid p-0">
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

    <!-- Who We Work With DESKTOP -->
    <section class="mb-md-0 mb-4 d-none d-md-block">
        <div class="container">
            <!--  -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 class="t1-b-1 text-dark custom-font-2">WHO WE WORK WITH</h1>
                </div>
            </div>
            {{-- <div class="d-md-block d-none">
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
                            <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-4 col-12 text-center border border-right-0 border-left-0 border-dark">
                        <div class="p-5">
                            <span>Architect</span><br/><br/>
                            <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters d-block d-md-none">
                <div class="col-md-4 col-12 text-center">
                    <div class="p-3">
                        <span>Master Planner</span><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-1.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="p-3">
                        <span>Brand Consultant</span><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" width="250">
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="p-3">
                        <span>Architect</span><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <hr class="border-dark" style="border-width: 2px;"/>
            </div> --}}
            <hr class="border-dark">
            <div class="row no-gutters">
                <div class="col-md-4 col-12 border border-left-0 border-top-0 border-dark">
                    <div class="p-md-5 p-3">
                        <h1>MASTER PLANNER</h1>
                        <br/>
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
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-2.jpg') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span class="custom-font-2">Miami World Center - Paramount Tower</span><br/>
                                    <span>Florida</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-3.jpg') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span class="custom-font-2">Marina Bay and Greater Southern Waterfront</span><br/>
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
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Master Planner Message</h1>
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
                                <h1 class="t1-m-1 custom-font-2">Sacha Schwarzkopf</h1>
                                <p>Director of Urban Design, AECOM Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row no-gutters mb-5">
               <div class="col-md-4 col-12 border border-left-0 border-top-0 border-dark">
                    <hr class="border-dark d-block d-md-none" style="border-width: 2px;"/>
                    <div class="p-md-5 p-3">
                        <h1>ARCHITECT</h1>
                        <br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-8 col-12 border border-top-0 border-left-0 border-right-0 border-dark">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class=" col-md-5 col-12 text-center">
                                <br/>
                                <img src="{{ asset('images/marc/partners/partners-5.jpg') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12">
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Architect Message</h1>
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
                                <h1 class="t1-m-1 custom-font-2">Raval Kapusta</h1>
                                <p>Founding Director, OOZN Design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
             <div class="row no-gutters">
                <div class="col-md-4 col-12 border border-left-0 border-top-0 border-dark">
                    <div class="p-md-5 p-3">
                        <h1>ARCHITECT</h1>
                        <br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-8 col-12 border border-left-0 border-right-0 border-top-0 border-dark">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-6.png') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span class="custom-font-2">Singapore National Stadium</span><br/>
                                    <span>Singapore</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-7.png') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span class="custom-font-2">Resort World Sentosa</span><br/>
                                    <span>Singapore</span>
                                </p>
                            </div>
                        </div>
                        <hr class="border-dark"/>
                        <div class="row">
                            <div class=" col-md-5 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-5.jpg') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12">
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Architect Message</h1>
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
                                <h1 class="t1-m-1 custom-font-2">Raval Kapusta</h1>
                                <p>Founding Director, OOZN Design</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
             <div class="row no-gutters">
                <div class="col-md-4 col-12 border border-left-0 border-top-0 border-dark">
                    <div class="p-md-5 p-3">
                        <h1>BRAND CONSULTANT</h1>
                        <br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" width="250">
                    </div>
                </div>
                <div class="col-md-8 col-12 border border-left-0 border-right-0 border-top-0 border-dark">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-10.jpg') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span class="custom-font-2">Hyde Tower - Collins Boulevard</span><br/>
                                    <span>Tangerang, Indonesia</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-9.jpg') }}" class="mx-auto w-100">
                                <p class="text-left">
                                    <span class="custom-font-2">Lavaya Resort</span><br/>
                                    <span>Bali, Indonesia</span>
                                </p>
                            </div>
                        </div>
                        <hr class="border-dark"/>
                        <div class="row">
                            <div class=" col-md-5 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-8-crop.png') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12">
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Brand Consultant Message</h1>
                                <br/>
                                <p>
                                    Marc's Boulevard focused to be next Batam's destination
                                    landmark development that provides high quality living
                                    spaces integrated with large open green areas, where the
                                    resident's life is balanced between work and daily
                                    activities. The design delivers a simple yet distinctive
                                    architecture alongside with combination of carefully
                                    chosen materials, it creates a luxury living development. It
                                    is resort-like living with excellent amenities. The lush
                                    landscape forms an invisible boundary between the
                                    buildings and the nature.
                                </p>
                                <br/>
                                <h1 class="t1-m-1 custom-font-2">Benny Bonardy</h1>
                                <p>Founder, Ben & Wyatt Branding House</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Who We Work With MOBILE -->
    <section class="d-block d-md-none">
        <div class="container">
            <!--  -->
            <div class="row mb-4">
                <div class="col-12 text-center p-5">
                    <h1 class="text-dark custom-font-2" style="font-size: 32px;">WHO WE <br>WORK WITH</h1>
                </div>
            </div>
            {{-- <div class="row no-gutters d-block d-md-none">
                <div class="col-md-4 col-12 text-center">
                    <hr class="border-dark" style="border-width: 2px;"/>
                    <div class="p-5">
                        <span>Master Planner</span><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-1.png') }}" class="mx-auto" width="130">
                    </div>
                    <hr class="border-dark" style="border-width: 2px;"/>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="p-5">
                        <span>Brand Consultant</span><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" width="250">
                    </div>
                    <hr class="border-dark" style="border-width: 2px;"/>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="p-5">
                        <span>Architect</span><br/>
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
            </div> --}}
            <div class="row no-gutters">
                <div class="col-md-4 col-12">
                    <hr class="border-dark d-block d-md-none" style="border-width: 2px;"/>
                    <div class="p-md-5 p-5 text-center" style="padding-left:1.5em !important; padding-right:1.5em !important;">
                        <img src="{{ asset('images/marc/partners/partner-brand-1.png') }}" class="mx-auto" width="130">
                        <br/>
                        <br/>
                        <p style="font-size: 12px;">
                            AECOM is a global network of experts working with
                            clients, communities and colleagues to develop and
                            implement innovative solutions to the world’s most
                            complex challenges.
                        </p>
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-md-6 col-12 p-3 text-center">
                                <img src="{{ asset('images/marc/partners/partners-2.jpg') }}" class="mx-auto w-100">
                                <p class="text-center">
                                    <span class="custom-font-2">Miami World Center - Paramount Tower</span><br/>
                                    <span style="font-size: 12px;">Florida</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 p-3 text-center">
                                <img src="{{ asset('images/marc/partners/partners-3.jpg') }}" class="mx-auto w-100">
                                <p class="text-center">
                                    <span class="custom-font-2">Marina Bay and Greater Southern Waterfront</span><br/>
                                    <span style="font-size: 12px;">Singapore</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-md-5 col-12 p-4 text-center">
                                <img src="{{ asset('images/marc/partners/partners-4.jpg') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12 text-center">
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Master Planner Message</h1>
                                <br/>
                                <p style="font-size: 12px;">
                                    Aiming to elevate the quality and character of Batam City, Marc’s
                                    Boulevard merges multiple facets of urban life into a concentrated
                                    hub of urban activities. Combining residential, commercial, business,
                                    and entertainment, into an exciting “Mixed-Use” destination. Thus
                                    bringing excitement into this near-waterfront development where
                                    each block is carefully crafted to integrate nature and urban living.
                                </p>
                                <br/>
                                <p style="font-size: 12px;">
                                    Marc’s Boulevard gives you the pleasure of living with nature while
                                    being conveniently close to the city center, an oasis in the future
                                    expansion of a bustling urban center.
                                </p>
                                <br/>
                                <br/>
                                <h1 class="t1-m-1 custom-font-2">Sacha Schwarzkopf</h1>
                                <p>Director of Urban Design, AECOM Indonesia</p>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4 col-12 text-center">
                    <hr class="border-dark d-block d-md-none" style="border-width: 2px;"/>
                    <div class="p-5" style="padding-bottom:0 !important;">
                        <img src="{{ asset('images/marc/partners/partner-brand-3.png') }}" class="mx-auto" width="130">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-md-6 col-12 p-3 text-center">
                                <img src="{{ asset('images/marc/partners/partners-6.png') }}" class="mx-auto w-100">
                                <p class="text-center">
                                    <span class="custom-font-2">Singapore National Stadium</span><br/>
                                    <span style="font-size: 12px;">Singapore</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 p-3 text-center">
                                <img src="{{ asset('images/marc/partners/partners-7.png') }}" class="mx-auto w-100">
                                <p class="text-center">
                                    <span class="custom-font-2">Resort World Sentosa</span><br/>
                                    <span style="font-size: 12px;">Singapore</span>
                                </p>
                            </div>
                        </div>
                            <div class="p-4 col-md-5 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-5.jpg') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12 text-center">
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Architect Message</h1>
                                <br/>
                                <p style="font-size: 12px;">
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
                                <br/>
                                <h1 class="t1-m-1 custom-font-2">Raval Kapusta</h1>
                                <p>Founding Director, OOZN Design</p>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row no-gutters">
                <div class="col-md-4 col-12 text-center">
                    <hr class="border-dark d-block d-md-none" style="border-width: 2px;"/>
                    <div class="p-5" style="padding-bottom:0 !important;">
                        <img src="{{ asset('images/marc/partners/partner-brand-2.png') }}" class="mx-auto" width="20    0">
                    </div>
                </div>
                <div class="col-md-8 col-12">
                    <div class="p-md-5 p-3">
                        <div class="row">
                            <div class="col-md-6 col-12 p-3 text-center">
                                <img src="{{ asset('images/marc/partners/partners10.jpg') }}" class="mx-auto w-100">
                                <p class="text-center">
                                    <span class="custom-font-2">Hyde Tower - Collins Boulevard</span><br/>
                                    <span style="font-size: 12px;">Tangerang, Indonesia</span>
                                </p>
                            </div>
                            <div class="col-md-6 col-12 p-3 text-center">
                                <img src="{{ asset('images/marc/partners/partners9.jpg') }}" class="mx-auto w-100">
                                <p class="text-center">
                                    <span class="custom-font-2">Lavaya Resort</span><br/>
                                    <span style="font-size: 12px;">Bali, Indonesia</span>
                                </p>
                            </div>
                        </div>
                            <div class="p-4 col-md-5 col-12 text-center">
                                <img src="{{ asset('images/marc/partners/partners-8-crop.png') }}" class="w-75">
                            </div>
                            <div class="col-md-7 col-12 text-center">
                                <h1 class="t1-m-1 custom-font-2">Marc’s Boulevard - Brand Consultant Message</h1>
                                <br/>
                                <p style="font-size: 12px;">
                                    Marc's Boulevard focused to be next Batam's destination
                                    landmark development that provides high quality living
                                    spaces integrated with large open green areas, where the
                                    resident's life is balanced between work and daily
                                    activities. The design delivers a simple yet distinctive
                                    architecture alongside with combination of carefully
                                    chosen materials, it creates a luxury living development. It
                                    is resort-like living with excellent amenities. The lush
                                    landscape forms an invisible boundary between the
                                    buildings and the nature.
                                </p>
                                <br/>
                                <br/>
                                <h1 class="t1-m-1 custom-font-2">Benny Bonardy</h1>
                                <p>Founder, Ben & Wyatt Branding House</p><br/><br/>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.frontend._back-marc')
@endsection

@section('styles')
    <style>
        .img-banner-responsive{
            height: 220px;
        }

        .border{
            border: 0;
        }

        .t1-b-1{
            font-size: 24px;
        }

        .m-b-50{
            margin-bottom: 25px;
        }

        @media (min-width: 576px) {

        }

        @media (min-width: 768px) {
            .img-banner-responsive{
                height: 550px;
            }

            .border{
                border: 1px solid #000;
            }

            .t1-b-1{
                font-size: 36px;
            }

            .m-b-50{
                margin-bottom: 50px;
            }
        }

        @media (min-width: 992px) {
        }

        @media (min-width: 1200px) {
        }
    </style>
@endsection


@section('scripts')
    <script>
    </script>
@endsection