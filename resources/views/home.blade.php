<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style type="text/css" media="screen">
    .bg-illustration-app-covoiturage{
      background-image: url({{ asset('img/illustration_covoiturage.png') }});
      min-height: 100vh;
      background-size: cover !important;
      position: relative;
    }
    .navbar.transparent.navbar-inverse{
      position: absolute;
      z-index: 17;
      width: 100%;
      border-width: 0px;
      -webkit-box-shadow: 0px 0px;
      box-shadow: 0px 0px;
      background-color: rgba(0,0,0,0.0);
      background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
      background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
      background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
  }
  </style>
  <nav class="navbar justify-content-between transparent navbar-inverse">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img width="45px" class="d-inline-block align-top" title="covoiturage" src="{{ asset('img/logo_app.png') }}" alt="logo_covoiturage">
        </a>
        <form class="form-inline">
          @if (Auth::check() && Auth::user()->email_verified_at != null)
            <a class="btn btn-outline-secondary nav-link" href="{{ route('admin.dashboard') }}">Dashboard<i class="ml-1 typcn icon typcn-th-large-outline"></i></a>
          @elseif (!Auth::check())
            <a class="btn btn-outline-secondary nav-link mr-2" href="{{ route('login') }}">Se connecter<i class="ml-1 typcn icon typcn-lock-open-outline"></i></a>
            <a class="btn btn-outline-secondary nav-link" href="{{ route('register') }}">S'enregistrer<i class="ml-1 typcn icon typcn-user-add-outline"></i></a>
          @elseif (isset(Auth::user()->email_verified_at) == null)
            <a class="btn btn-outline-secondary nav-link mr-2" href="{{ route('verification.notice') }}">Vérification d'email<i class="ml-1 typcn icon typcn-media-record text-danger"></i></a>
          @endif
        </form>
    </div>
  </nav>
  <section class="bg-illustration-app-covoiturage"></section>
</body>
</html>

