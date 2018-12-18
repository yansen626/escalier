<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top p-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/frontend/logo-transparent.png') }}" class="mb-lg-0 mb-md-0 mb-sm-0 mb-3 logo-responsive" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-5" id="navbarResponsive">
            <ul class="navbar-nav ml-auto ml-4">
                <li class="nav-item mr-3 pr-3">
                    <div class="w-100 py-2 border-bottom border-dark">
                        <a class="nav-link pl-0 pr-5 h5 {{ Route::currentRouteName() == 'frontend.introduction' ? 'active' : '' }}" href="{{ route('frontend.introduction') }}">Introduction
                            {{--<span class="sr-only">(current)</span>--}}
                        </a>
                    </div>
                    <div class="w-100 py-2 border-bottom border-dark">
                        <a class="nav-link pl-0 pr-5 h5 {{ Route::currentRouteName() == 'frontend.location' ? 'active' : '' }}" href="{{ route('frontend.location') }}">Location</a>
                    </div>


                </li>
                <li class="nav-item mr-3 pr-3">
                    <div class="w-100 py-2 border-bottom border-dark">
                        @if(Route::currentRouteName() == 'frontend.plan.master' ||
                        Route::currentRouteName() == 'frontend.plan.floor' ||
                        Route::currentRouteName() == 'frontend.plan.unit')
                            <a class="nav-link pl-0 pr-5 h5 active" href="{{ route('frontend.plan.master') }}">Plans</a>
                        @else
                            <a class="nav-link pl-0 pr-5 h5" href="{{ route('frontend.plan.master') }}">Plans</a>
                        @endif

                    </div>
                    <div class="w-100 py-2 border-bottom border-dark">
                        <a class="nav-link pl-0 pr-5 h5 {{ Route::currentRouteName() == 'frontend.developer' ? 'active' : '' }}" href="{{ route('frontend.developer') }}">Developer</a>
                    </div>
                </li>
                <li class="nav-item mr-3 pr-3">
                    <div class="w-100 py-2 border-bottom border-dark">
                        <a class="nav-link pl-0 pr-5 h5 {{ Route::currentRouteName() == 'frontend.features' ? 'active' : '' }}" href="{{ route('frontend.features') }}">Features</a>
                    </div>
                    <div class="w-100 py-2 border-bottom border-dark">
                        <a class="nav-link pl-0 pr-5 h5 {{ Route::currentRouteName() == 'frontend.contact_us' ? 'active' : '' }}" href="{{ route('frontend.contact_us') }}">Contact</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>