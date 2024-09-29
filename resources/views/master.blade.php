<!DOCTYPE html>
<html lang="en">

@include('styles')

<body>

  <!-- ======= Header ======= -->
  @include('header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('left')
  <!-- End Sidebar-->

  <main id="main" class="main">


    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
 @include('scripts')

</body>

</html>