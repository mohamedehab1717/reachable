@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>schools</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('style/hospitals.css') }}">
</head>
<body>
<!-- Page Title -->
<div class="page-title">
    <h1>Universities & Schools</h1>
    <div class="page-subtitle">Choose from the top educational institutions in Egypt</div>
</div>

<!-- Navbar -->
<nav class="navbar">
    <div class="navbar-content">
        <a href="../index/index.html" class="logo">Reachable</a>
        <div class="search-box">
            <input type="text" placeholder="Where do you want to go today?" />
            <i class="fas fa-search search-icon"></i>
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
            <a href="login.html" class="lang-link">Login</a>
            
        </div>
    </div>
</nav>



<!-- Grid of Places -->
<div class="grid">
    @foreach($schools as $school)
        <div class="place-card">
            <div class="place-image-box">
            <a href="{{ url('schools/' . $school->id) }}">
                

            @php
    $imagePath = '';

    if (file_exists(public_path('storage/' . $school->img1))) {
    $imagePath = asset('storage/' . $school->img);
} elseif (file_exists(public_path('image/image/' . $school->img))) {
    $imagePath = asset('image/image/' . $school->img1);
} else {
    $imagePath = asset('images/default.png');
}

@endphp

<img src="{{ $imagePath }}" alt="{{ $school->title }}">


                </a>
            </div>
            <div class="place-text-box">
                <div class="place-name">{{ $school->title }}</div>
                <div class="place-description">{{ $school->description }}</div>
                <div class="place-description">{{ $school->des }}</div>
            </div>
        </div>
    @endforeach
</div>

@endsection
