@extends('layouts.app')
@php use Illuminate\Support\Str; @endphp

@push('styles')
<link rel="stylesheet" href="{{ asset('style/hospitals.css') }}">
@endpush

@section('content')
<!-- Navbar -->
<nav class="navbar">
    <div class="navbar-content">
        <a href="{{ url('/') }}" class="logo">Reachable</a>
        <div class="search-box">
            <input type="text" placeholder="Where do you want to go today?" />
            <i class="fas fa-search search-icon"></i>
        </div>
        <div class="right-side">
            <div class="dropdown">
                <button class="dropbtn"> Categories <i class="fas fa-chevron-down"></i> </button>
                <div class="dropdown-content">
                    <a href="{{ url('hospitals') }}">Hospitals / Clinics</a>
                    <a href="{{ url('restaurants') }}">Restaurants / Cafes</a>
                    <a href="{{ url('schools') }}">Schools / Colleges</a>
                    <a href="{{ url('malls') }}">Shopping Malls</a>
                    <a href="{{ url('transport') }}">Public Transport</a>
                    <a href="{{ url('sports') }}">Adaptive Sports</a>
                    <a href="{{ url('jobs') }}">Job Opportunities</a>
                    <a href="{{ url('supplies') }}">Supplies Shops</a>
                </div>
            </div>
            <a href="{{ url('login') }}" class="lang-link">Login</a>
        </div>
    </div>
</nav>

<!-- Page Title -->
<div class="page-title">
    <h1>Hospitals & Clinics</h1>
    <div class="page-subtitle">Choose your Hospitals & Clinics in Egypt</div>
</div>

<!-- Grid of Places -->
<div class="grid">
    @foreach($hospitals as $hospital)
        <div class="place-card">
            <div class="place-image-box">
                <a href="{{ url('hospitals/' . $hospital->id) }}">
                @php
    $imagePath = '';

    if (file_exists(public_path('storage/' . $hospital->img))) {
        // صورة مرفوعة من الأدمن (موجودة في storage)
        $imagePath = asset('storage/' . $hospital->img);
    } elseif (file_exists(public_path('image/image/' . $hospital->img))) {
        // صورة قديمة موجودة في public/image/image
        $imagePath = asset('image/image/' . $hospital->img);
    } else {
        // صورة غير موجودة – تقدر تحط صورة افتراضية هنا
        $imagePath = asset('images/default.png');
    }
@endphp

<img src="{{ $imagePath }}" alt="{{ $hospital->title }}">





                </a>
            </div>
            <div class="place-text-box">
                <div class="place-name">{{ $hospital->title }}</div>
                <div class="place-description">{{ $hospital->des }}</div>
            </div>
        </div>
    @endforeach
</div>

<footer style="text-align: center; padding: 20px; background-color: #39ced1; color: white;">
  &copy; 2025 Reachable. All rights reserved.
</footer>
@endsection
