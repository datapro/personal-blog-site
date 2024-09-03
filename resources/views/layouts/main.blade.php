<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body class="body body2 tg-heading-subheading animation-style3">
    <!--=====progress END=======-->

<div class="preloader-area">
    <div class="preloader">
      <!-- Replace with your PNG logo -->
      <img src="{{asset('assetsmain/img/logo/preloader.png')}}" alt="Logo" class="logo">
    </div>
  </div>
<!-- removed overlay loading  -->

    @include('includes.header')
   @yield('content')
    @include('includes.footer')
</body>
</html>