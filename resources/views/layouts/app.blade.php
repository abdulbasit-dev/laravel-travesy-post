<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>{{ config('app.name', 'Laravel') }}</title>


  <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
  <link rel="stylesheet" href="{{ asset('assets/fonts/simple-line-icons.min.css') }}">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
  <link rel="stylesheet" href="{{ asset('assets/js/smoothproducts.min.js') }}">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="min-height: 100vh; display:flex; flex-direction:column;">
  <div id="app">

    @include('partials.nav')



    @include('partials.message')
    @yield('content')

    @include('partials.footer')

  </div>



  <!-- Scripts -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js">
  </script>
  <script src="{{ asset('assets/js/smoothproducts.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>

  {{-- Ckeditor  --}}
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'body' );
  </script>



</body>

</html>