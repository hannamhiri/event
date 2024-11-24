<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eventre</title>
	
	<!-- PLUGINS CSS STYLE -->
	<!-- Bootstrap -->
	<link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Themefisher Font -->  
	<link href="{{ asset('plugins/themefisher-font/style.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Magnific Popup -->
	<link href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
	<!-- Slick Carousel -->
	<link href="{{ asset('plugins/slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/slick/slick-theme.css') }}" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="body-wrapper">

	<!-- Navigation -->
	<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
		<div class="container-fluid p-0">
			<!-- Logo -->
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ asset('images/logo.png') }}" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item dropdown active dropdown-slide">
						<a class="nav-link" href="{{ url('/') }}">Home<span>/</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('about-us') }}">About US<span>/</span></a>
					</li>
					<li class="nav-item dropdown dropdown-slide">
						<a class="nav-link" href="#" data-toggle="dropdown">Gallery<span>/</span></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('eventsusers') }}">All Galleries</a>
							<a class="dropdown-item" href="{{ url('addevent') }}">Add Event</a>
 <!-- My Gallery Dropdown -->
 <div class="dropdown-divider"></div>
            <h6 class="dropdown-header" style="margin-left:0%; padding-left:0%;">My Gallery</h6>
            <a class="dropdown-item" href="{{ url('mynews') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All My Events</a>
            <a class="dropdown-item" href="{{ url('myevents/approved') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved Events</a>
            <a class="dropdown-item" href="{{ url('myevents/not-approved') }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Approved Events</a>
      

						</div></a>
					</li>
					<li class="nav-item dropdown dropdown-slide">
						<a class="nav-link" href="#" data-toggle="dropdown">Pages<span>/</span></a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('upcoming-events') }}">Schedule</a>
							<a class="dropdown-item" href="{{ url('cart') }}">My Cart</a>
							<a class="dropdown-item" href="{{ url('404') }}">404</a>
							<a class="dropdown-item" href="{{ url('sponsors') }}">Sponsors</a>
							<a class="dropdown-item" href="{{ url('eventsusers') }}">News</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url('contact') }}">Contact</a>
					</li>
					
				
    @if(Auth::check()) <!-- Check if user is authenticated -->
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <!-- User Profile Picture and Name -->
                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                <span>{{ Auth::user()->name }}</span> <!-- User's Full Name -->
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ url('edit_profil/' . Auth::user()->id) }}">
                    <i class="fa-solid fa-user-edit"></i> Edit Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#"  class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
    <i class="fas fa-sign-out-alt"></i> Logout
</a>

<!-- Hidden logout form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
                
            </div>
        </li>
    @else
	<li class="nav-item dropdown dropdown-slide">
						<a class="nav-link" href="#" data-toggle="dropdown">
							<i class="fa-regular fa-circle-user"></i>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('connexion') }}">Sign IN</a>
							<a class="dropdown-item" href="{{ url('forgotPassword') }}">Forget Password</a>
						</div>
					</li>
    @endif
</ul>

				<a href="{{ url('eventsusers') }}" class="ticket">
					<img src="{{ asset('images/icon/ticket.png') }}" alt="ticket">
					<span>Buy Ticket</span>
				</a>
			</div>
		</div>
	</nav>