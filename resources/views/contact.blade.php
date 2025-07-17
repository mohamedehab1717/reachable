@extends('layouts.app')

@section('content')
<style>
  /* نفس CSS تبعك من HTML */
  body {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  background-color: #ffffff;
}

.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: rgb(57, 206, 209);
  padding: 10px 40px; /* وسعت البادينج شوية من اليمين والشمال */
  z-index: 1000;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.navbar-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.left-side {
  display: flex;
  align-items: center;
  gap: 20px;
}

.right-side {
  display: flex;
  align-items: center;
  gap: 30px; /* المسافة بين العناصر داخل اليمين */
}

.logo {
  font-size: 20px;
  font-weight: bold;
  color: white;
  margin-left: 10px;
}

.nav-link,
.lang-link {
  text-decoration: none;
  color: #ffffff;
  font-weight: 400;
  font-size: 15px;
  transition: all 0.3s ease;
}

.nav-link:hover,
.lang-link:hover {
  color: white;
  padding: 5px 10px;
  border-radius: 20px;
  background-color: rgba(255, 255, 255, 0.2);
}

.search-box {
  position: relative;
  width: 250px;
  margin: 0 600px;
  flex-shrink: 0;
}

.search-box input {
  padding: 8px 40px 8px 15px;
  font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
}

.search-box .search-icon {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  color: #333;
  font-size: 18px;
  pointer-events: none;
}

  
  .right-side {
    display: flex;
    align-items: center;
    gap: 60px;
    margin-right: 35px;
  }
  
  

  .contact-header {
    background-color: #ffffff;
    color: #00a9b7;
    text-align: center;
    padding: 180px 0 130px 0;
    font-size: 50px;
    font-weight: bold;
  }

  .contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 80px 20px;
    flex-wrap: wrap;
    position: relative;
    background-color: #00a9b7;
    margin-top: -50px;
    box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
  }

  .contact-info {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 100px;
    flex-wrap: wrap;
  }

  .contact-box {
    text-align: center;
    max-width: 300px;
  }

  .icon-circle {
    background-color: #ffffff;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
  }

  .icon-circle i {
    font-size: 36px;
    color: #00a9b7;
  }

  .contact-box h3 {
    margin: 15px 0 10px 0;
    font-size: 22px;
    font-weight: bold;
    color: #ffffff;
  }

  .contact-box p {
    margin: 8px 0;
    color: #ffffff;
    font-size: 16px;
  }

  @media (max-width: 768px) {
    .contact-container {
      flex-direction: column;
      padding: 50px 20px;
    }

    .contact-info {
      flex-direction: column;
      gap: 40px;
    }
  }
</style>
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

<!-- Contact Section -->
<div class="contact-header">
  Contact Us
</div>

<div class="contact-container">
  <div class="contact-info">
    <div class="contact-box">
      <div class="icon-circle">
        <i class="fas fa-map-marker-alt"></i>
      </div>
      <h3>Company Address</h3>
      <p>123 Main Street</p>
      <p>City, Country</p>
    </div>
    <div class="contact-box">
      <div class="icon-circle">
        <i class="fas fa-phone"></i>
      </div>
      <h3>Phone Number</h3>
      <p>+123 456 7890</p>
      <p>+987 654 3210</p>
    </div>
    <div class="contact-box">
      <div class="icon-circle">
        <i class="fas fa-envelope"></i>
      </div>
      <h3>Email Id and Website</h3>
      <p>info@example.com</p>
      <p>www.example.com</p>
    </div>
  </div>
</div>
@endsection
