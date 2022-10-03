<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="favicon.png">
  <title> @yield('title') </title>

   <!-- General CSS Files -->
 <link rel="stylesheet" href="{{ asset('/assets/modules/bootstrap/css/bootstrap.min.css') }}">
 <link rel="stylesheet" href="{{ asset('/assets/modules/fontawesome/css/all.min.css') }}">

 <!-- CSS Libraries -->
 <link rel="stylesheet" href="{{ asset('/assets/modules/bootstrap-social/bootstrap-social.css') }}">

 <!-- Template CSS -->
 <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">
 <link rel="icon" href="favicon.png">

<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    @yield('content')
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  <script src="{{ asset('/assets/js/page/auth-register.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('/assets/js/custom.js') }}"></script>
</body>
</html>
