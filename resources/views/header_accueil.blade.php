
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>EventPlanner</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="dist/assets/css/fontawesome.css">
    <link rel="stylesheet" href="dist/assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="dist/assets/css/animated.css">
    <link rel="stylesheet" href="dist/assets/css/owl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

--><style>
#signInButton:hover{
color: white !important;
}
#signInButton{
color: white !important;
}
a{
  font-family: 'Poppins', sans-serif;
}
</style>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/img/logo.PNG" style="height: 80px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>

              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Services
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/workshops">Worshops</a></li>
                  <li><a href="#">Page 1-2</a></li>
                  <li><a href="#">Page 1-3</a></li>
                </ul>
              </li>

              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
              
              @if (Route::has('login'))
                  @auth
                      <li class="scroll-to-section"><a href="{{ url('/home') }}">Dashboard</a></li>
                  @else
                      <li class="scroll-to-section">
                          <div class="main-red-button-hover">
                              <a href="{{ route('login') }}" id="signInButton" >Sign In</a>
                          </div>
                      </li>
                 
          
              @if (Route::has('register'))
                  <li class="scroll-to-section">
                      <div class="main-red-button-hover">
                          <a href="{{ route('register') }}" id="signInButton" >Sign Up</a>
                      </div>
                  </li> 
              @endif
            @endauth
          @endif
          </ul>
            
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>