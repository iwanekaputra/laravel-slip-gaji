<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bootstrap Components &rsaquo; Alert &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
@livewireStyles
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      @include('layouts.admin.navbar')

      @include('layouts.admin.sidebar')

     @yield('content')


      {{-- @include('layouts.admin.footer') --}}
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="/modules/jquery.min.js"></script>
  <script src="/modules/popper.js"></script>
  <script src="/modules/tooltip.js"></script>
  <script src="/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/modules/moment.min.js"></script>
  <script src="/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="/js/scripts.js"></script>
  <script src="/js/custom.js"></script>
  @livewireScripts
</body>
</html>
