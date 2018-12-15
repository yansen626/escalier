<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>F.O.R - Facilitated Office Residence</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/frontend/heroic-features.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body style="background-color: #f2f2f2;">
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
    @yield('scripts')

</body>

</html>
