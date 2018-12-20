<!DOCTYPE html>
<html class="js" lang="en">

<head>
    @yield('head_and_title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="{{ asset('css/frontend/heroic-features.css')}}" rel="stylesheet">
    <link href="{{ asset('css/frontend/custom.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body style="background: #e6e7e8;">
    {{--<div id="preloader"></div>--}}

    <!-- Page Content -->
    <div class="container">

        @include('partials.frontend._header')

        @yield('content')
        <!-- Footer #1============================================= -->


    </div>
    @include('partials.frontend._footer')
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script>
        $(window).on('load', function(){
            // $('#preloader').delay(100).fadeOut();
        });

        $('#subscription_form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '',
                type: 'POST',
                data: {
                    name: $('#subscribe_name'),
                    email: $('#subscribe_email')
                }, // no need to stringify
                success: function (result) {
                    $('#subscribe_success_message').slideDown(500);
                }
            });
        });

    </script>
    @yield('scripts')

</body>

</html>
