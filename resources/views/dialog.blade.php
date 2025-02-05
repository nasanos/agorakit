<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>{{setting('name')}}</title>

  <link rel="shortcut icon" href="{{{ asset('logo/favicon.png') }}}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/v4-shims.css">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


    <!-- additional css -->

    @yield('css')
    @stack('css')

    <!-- head -->
    @yield('head')
</head>

<body>


  @include('partials.errors')

  <div class="container main-container main-dialog">

    <div class="main dialog">
      @yield('content')
    </div>
  </div>


  <div class="credits">
    {{trans('messages.made_with')}}
    <a href="https://www.agorakit.org">Agorakit ({{config('agorakit.version')}})</a>
  </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/unpoly.min.js') }}"></script>
    <script src="{{ asset('js/trumbowyg.min.js') }}"></script>


    @yield('js')
    @stack('js')

    <script src="{{ asset('js/compilers.js') }}"></script>

    <!-- footer -->
    @yield('footer')



</body>
</html>
