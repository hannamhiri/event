<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>MindWell</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="dist/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="dist/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="dist/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="dist/assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/"><img src="dist/assets/img/gallery/mind.png" width="218" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="{{ url('/aboutus') }}">Qui nous</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{ url('/suggestions') }}">Services</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{ route('medecins')}}">Médecins</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{ url('/activities') }}">Activities </a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{ route('articles') }}">Articles</a></li>

              <li class="nav-item px-2"><a class="nav-link" href="{{ url('/appointements') }}">Contact</a></li>

            </ul>

            @if (Auth::check() && Auth::user()->usertype === "admin")
            <a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ route('dashboard') }}">Dashboard</a>
        @endif
        
        @if (Auth::check() && Auth::user()->usertype !== "admin")
            <!-- User is logged in but not admin -->
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">
                    Logout
                </button>
            </form>
        @endif
        
        @if (!Auth::check())
            <!-- If user is not logged in -->
            <div class="main-red-button-hover">
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Sign In</a>
            </div>
        
            @if (Route::has('register'))
                <div class="main-red-button-hover">
                    <a href="{{ route('register') }}" class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4">Sign Up</a>
                </div>
            @endif
        @endif
        
        
            

          </div>
        </div>
      </nav>