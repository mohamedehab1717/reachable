<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplies Shops</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/hospitals.css') }}">
</head>
<body>

  <nav class="navbar">
    <div class="navbar-content">
      <a href="{{ url('/') }}" class="logo">Reachable</a>
      <div class="search-box">
        <input type="text" placeholder="Where do you want to go today?" />
        <i class="fas fa-search search-icon"></i>
      </div>
      <div class="right-side">
        <div class="dropdown">
          <button class="dropbtn">Categories <i class="fas fa-chevron-down"></i></button>
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
        <a href="{{ route('login') }}" class="lang-link">Login</a>
     
      </div>
    </div>
  </nav>

  <div class="page-title">
  <h1>Supplies Shops</h1>
    <div class="page-subtitle">Choose your Supplies Shop in Egypt</div>
  </div>

  <div class="grid">
    <a href="{{ url('supplies/medical') }}" class="place-card">
      <div class="place-image-box"><img src="{{ asset('image/image/medica.JPG') }}" alt="Cairo Medical Center" /></div>
      <div class="place-text-box">
        <div class="place-name">Cairo Medical Center</div>
        <div class="place-description">Supplies Shop</div>
      </div>
    </a>

    <a href="{{ url('supplies/horus') }}" class="place-card">
      <div class="place-image-box"><img src="{{ asset('image/image/horus.jpg') }}" alt="Horus Medical and Prosthetics Company" /></div>
      <div class="place-text-box">
        <div class="place-name">Horus Medical and Prosthetics Company</div>
        <div class="place-description">Supplies Shop</div>
      </div>
    </a>

    <a href="{{ url('supplies/elmasryia') }}" class="place-card">
      <div class="place-image-box"><img src="{{ asset('image/image/elmasryia.jpg') }}" alt="Elmasryia Medical supplies" /></div>
      <div class="place-text-box">
        <div class="place-name">Elmasryia Medical supplies</div>
        <div class="place-description">Supplies Shop</div>
      </div>
    </a>

    <a href="{{ url('supplies/miracle') }}" class="place-card">
      <div class="place-image-box"><img src="{{ asset('image/image/miracle.jpg') }}" alt="Miracle Medical Industries" /></div>
      <div class="place-text-box">
        <div class="place-name">Miracle Medical Industries</div>
        <div class="place-description">Supplies Shop</div>
      </div>
    </a>

    <a href="{{ url('supplies/alqasr') }}" class="place-card">
      <div class="place-image-box"><img src="{{ asset('image/image/alqasr.jpg') }}" alt="Al Qasr El Tebi" /></div>
      <div class="place-text-box">
        <div class="place-name">Al Qasr El Tebi</div>
        <div class="place-description">Supplies Shop</div>
      </div>
    </a>

    <a href="{{ url('supplies/golden') }}" class="place-card">
      <div class="place-image-box"><img src="{{ asset('image/image/golden.jpg') }}" alt="Golden Medic" /></div>
      <div class="place-text-box">
        <div class="place-name">Golden Medic</div>
        <div class="place-description">Supplies Shop</div>
      </div>
    </a>
  </div>

</body>
</html>
