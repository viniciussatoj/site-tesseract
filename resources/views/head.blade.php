<!DOCTYPE html>
<html class="@yield('html-classes')">
  <head>

      {{-- Título da Plataforma --}}
        <title>Grupo Tesseract - @yield('page-title')</title>

      {{-- Codificação de Caracteres --}}
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

      {{-- Lingua utilizada na view --}}
        <meta name="language" content="{{ Config::get('app.locale') }}">

      {{-- Mobile Zoom / IECompat & Author e Description --}}
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">

      {{-- Favicon e relacionados --}}
        <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="{{ asset('favicon/apple-touch-icon-57x57') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="60x60" href="{{ asset('favicon/apple-touch-icon-60x60') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="{{ asset('favicon/apple-touch-icon-72x72') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="{{ asset('favicon/apple-touch-icon-76x76') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="{{ asset('favicon/apple-touch-icon-114x114.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="120x120" href="{{ asset('favicon/apple-touch-icon-120x120.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="{{ asset('favicon/apple-touch-icon-144x144.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="152x152" href="{{ asset('favicon/apple-touch-icon-152x152.png') }}">
        <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{ asset('favicon/apple-touch-icon-180x180.png') }}">
        <link rel="apple-touch-icon" type="image/png" href="{{ asset('favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}">
        <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
        <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#878787">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/mstile-144x144.png') }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/mstile-150x150.png') }}">
        <meta name="theme-color" content="#000000">

      {{-- Google SEO --}}
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow, noarchive">

      {{-- Google Analytics--}}
        <meta name="google-site-verification" content="">

      {{-- Facebook Pixel AD - pra referência acesse: https://www.facebook.com/ads/manager/pixel/ --}}
      @if(env('APP_ENV') === 'production')

      @endif

      {{-- Facebook OpenGraph metatags --}}
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="fb:app_id" content="">
        <meta property="og:title" content="">
        <meta property="og:site_name" content="">
        <meta property="og:url" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />

      {{-- Twitter Card metatags --}}
        <meta name="twitter:card" content="summary">

      {{-- Styles - CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tesseract.css') }}" rel="stylesheet">

      {{-- Scripts - JS --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/tesseract.js') }}"></script>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="@yield('body-classes')">
  @yield('page-content')

  @yield('footer')
