<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>{{ $school->title }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('style/hospitals.css') }}">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-content">
      <a href="/" class="logo">Reachable</a>
      <div class="right-side">
        <a href="login.html" class="lang-link">Login</a>
     
      </div>
    </div>
  </nav>

  <div class="reachable-info">
    <h1>{{ $school->title }}</h1>
    <div class="location">{{ $school->location }}</div>
    <p>{{ $school->description }}</p>
  </div>

  <div class="key-info">
    <h2>Features</h2>
    <ul>
      @foreach(explode(',', $school->features) as $feature)
        <li><strong>-</strong> {{ $feature }}</li>
      @endforeach
    </ul>
  </div>

  <div class="key-info">
    <h2>Location</h2>
    <p><strong>Address:</strong> {{ $school->address }}</p>
    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb={{ urlencode($school->map_url) }}"
        allowfullscreen=""
        loading="lazy">
      </iframe>
    </div>
  </div>

</body>
</html>
