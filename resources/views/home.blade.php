@extends('layouts.app')

@section('content')

<!-- Navbar -->
<nav class="navbar">
  <div class="navbar-content">
    <div class="left-side">
      <div class="logo">Reachable</div>
    </div>
    <div class="right-side">
      <div class="dropdown">
        <button class="dropbtn">
          Categories <i class="fas fa-chevron-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="{{ route('hospitals') }}">Hospitals / Clinics</a>
          <a href="{{ url('REST/restu.html') }}">Restaurants / Cafes</a>
          <a href="{{ url('schools') }}">Schools / Colleges</a>
          <a href="{{ url('malls') }}">Shopping Malls</a>
          <a href="{{ url('TRANS/transport.html') }}">Public Transport</a>
          <a href="{{ url('sports') }}">Adaptive Sports</a>
          <a href="{{ url('jobs/Job.html') }}">Job Opportunities</a>
          <a href="{{ url('supplies') }}">Supplies Shops</a>
        </div>
      </div>

      <a href="{{ route('about') }}" class="nav-link">About Us <i class="fas fa-info-circle"></i></a>
      <a href="{{ route('contact') }}" class="nav-link">Contact Us <i class="fas fa-phone-alt flip-icon"></i></a>

      @if(session()->has('user'))
        <span>Welcome {{ session('user')->firstname }}</span> <!-- استخدام الـ first_name هنا -->
        <a href="{{ route('logout') }}" class="lang-link">Log Out</a>
      @else
        <a href="{{ route('login') }}" class="lang-link">Login</a>
      @endif

     
    </div>
  </div>
</nav>

<!-- Intro Section -->
<section class="intro-section">
  <div class="video-banner">
    <video autoplay loop playsinline muted>
      <source src="{{ asset('video/video/v.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-text-box">
      <h1>Welcome to Reachable</h1>
      <div class="search-box">
        <input type="text" placeholder="Choose your destination" />
        <i class="fas fa-search search-icon"></i>
      </div>
      <p class="motivational-text">
        Wherever you want to go, we'll reach you there.<br>Discover the world around you.
      </p>
    </div>
  </div>
</section>

<!-- Categories Section -->
<section class="categories-section">
  <h2>Explore Categories</h2>
  <p>Find places and services around you</p>
  <div class="categories-grid">
    <button class="category-button" onclick="location.href='{{ route('hospitals') }}'" data-aos="fade-up" data-aos-delay="100">
      <i class="fas fa-hospital"></i><p>Hospitals / Clinics</p><p>Access nearby healthcare facilities easily.</p>
    </button>

    <button class="category-button" onclick="location.href='{{ url('REST/restu.html') }}'" data-aos="fade-up" data-aos-delay="200">
    <i class="fas fa-utensils"></i>
    <p>Restaurants / Cafes</p>
    <p>Enjoy your favorite meals anytime.</p>
</button>

    <button class="category-button" onclick="location.href='{{ route('schools') }}'" data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-school"></i><p>Schools / Colleges</p><p>Explore educational institutions around you.</p>
      </button>

    <button class="category-button" onclick="location.href='{{ url('malls') }}'" data-aos="fade-up" data-aos-delay="400">
      <i class="fas fa-shopping-cart"></i><p>Shopping Malls</p><p>Find all your essentials in one place.</p>
    </button>

    <button class="category-button" onclick="location.href='{{ url('TRANS/transport.html') }}'" data-aos="fade-up" data-aos-delay="500">
    <i class="fas fa-utensils"></i>
    <p>Public Transport</p>
    <p>Find all your essentials in one place.</p>
</button>


    <button class="category-button" onclick="location.href='{{ url('SPORTS/sports.html') }}'" data-aos="zoom-in" data-aos-delay="600">
      <i class="fas fa-running"></i><p>Adaptive Sports</p><p>Join accessible sport activities.</p>
    </button>

    <button class="category-button" onclick="location.href='{{ asset('jobs/Job.html') }}'" data-aos="flip-left" data-aos-delay="700">
    <i class="fas fa-briefcase"></i>
    <p>Job Opportunities</p>
    <p>Browse nearby job offers.</p>
</button>


    <button class="category-button" onclick="location.href='{{ route('supplies') }}'" data-aos="fade-up" data-aos-delay="100">
    <i class="fas fa-store"></i><p>Supplies Shops</p><p>Find stores for your daily needs.</p>
</button>




  </div>
</section>

<footer style="text-align: center; padding: 20px; background-color: #39ced1; color: white;">
  &copy; 2025 Reachable. All rights reserved.
</footer>

<script>
  AOS.init();
</script>

@endsection
