<!-- Footer -->
<footer>
    <div class="parallax100 p-b-15 bg-1" style="background: black;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="logo-footer">
                        <a href="{{ route('home') }}"><img src="{{ asset('images/escalier/logo-escalier-footer.png') }}"
                                alt="LOGO" style="width: 150px; height: auto;"></a>
                    </div>
                    <div class="flex-wr-s-s t1-s-2 cl-13 p-b-9 pt-5 d-none d-md-block copyright">
                        <span class="size-w-4">
                            Copyright © 2019. All Rights Reserved
                        </span>
                    </div>
                </div>
                <div class="col-md-4 p-t-50 mt-3 pt-md-10 headoffice-footer">
                    <ul>
                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-30">
                            <span class="size-w-4">
                                Head Office RJS 29 C No. 3 Dynasty Walk<br />
                                Alam Sutera Tangerang, Banten
                            </span>
                        </li>
                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-4">
                                escalier-studio.com<br />
                                info@escalier-studio.com<br />
                                Copyright © 2019. All Rights Reserved<br />
                                0878 8767 6300<br />
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4  workshop-footer">
                    <ul>
                        <li class="flex-wr-s-s t1-s-2 cl-13 p-b-9">
                            <span class="size-w-4">
                                Workshop Kawasan Industri Agarindo No. 168<br />
                                Ds Bunder Cikupa Pasar Kemis Kec. Tangerang,<br />
                                Banten 15710
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="flex-wr-s-s t1-s-2 cl-13 p-b-9 pt-5 d-block d-md-none text-center">
                        <span class="size-w-4">
                            Copyright © 2019. All Rights Reserved
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


@section('styles')
<style>
    @media (max-width: 576px) {
        .logo-footer {
            text-align: center;
            padding-top: 30px;
        }

        .workshop-footer {
            padding-top: 20px;
        }
    }

    @media (min-width: 768px) {
        .workshop-footer {
            padding-top: 3rem;
            margin-top: 1rem;
        }

        .logo-footer {
            padding-top: 30px;
            padding-left: 80px;
        }

        .copyright {
            padding-top: 160px !important;
            padding-left: 80px;
        }

        .headoffice-footer {
            padding-top: 80px;
        }

        .workshop-footer {
            padding-top: 78px;
        }
    }
    }
</style>