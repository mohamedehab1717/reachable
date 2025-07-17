@extends('layouts.app') <!-- استخدام القالب الرئيسي -->
@push('styles')
<link rel="stylesheet" href="{{ asset('style/about.css') }}">
@endpush

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
<!-- هنا تضيف الروابط الجديدة -->
<a href="{{ route('about') }}" class="nav-link">About Us <i class="fas fa-info-circle"></i></a>
      
      <a href="{{ route('login') }}" class="lang-link">Login</a>
      
    </div>
  </div>
</nav>


<!-- ✅ Main Page -->
<div class="main">
  <div class="left-section"></div>
  <div class="right-section">
    <div class="section target">
      <h2>Target</h2>
      <p>
        Our mission is to make the world more accessible for people with disabilities
        by connecting them to inclusive places like restaurants, hospitals, and
        other essential services. Reachable is here to ensure that accessibility is
        not a privilege, but a right for everyone.
      </p>
    </div>
    <div class="section services">
      <h2>Services</h2>
      <p>
        Reachable helps users find:<br />
        - Accessible restaurants with wheelchair-friendly entrances and services.<br />
        - Hospitals and clinics equipped with specialized facilities.<br />
        - Real reviews and ratings from the disabled community.<br />
        - Maps and directions for smooth navigation.
      </p>
    </div>
    <div class="section vision">
      <h2>Vision</h2>
      <p>
        Reachable is a digital platform designed to support individuals with disabilities
        by providing trusted information about inclusive locations. We believe everyone
        deserves equal access to public spaces. Our goal is to build a more connected,
        understanding, and accessible world one place at a time.
      </p>
    </div>
  </div>
</div>

@endsection
