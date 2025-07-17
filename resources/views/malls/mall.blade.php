<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>MALLS</title>
  <style>
    /* كل الـ CSS تبقى كما هي */
    /* ... (نفس الكود الموجود في <style>) ... */
  </style>
   <link rel="stylesheet" href="{{ asset('style/hospitals.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-content">
      <a href="../index/index.php" class="logo">Reachable</a>
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
          <a href="hospitals/hos.html">Hospitals / Clinics</a>
          <a href="REST/restu.html">Restaurants / Cafes</a>
          <a href="schools.html">Schools / Colleges</a>
          <a href="malls.html">Shopping Malls</a>
          <a href="TRANS/transport.html">Public Transport</a>
          <a href="SPORTS/sports.html">Adaptive Sports</a>
          <a href="jobs/Job.html">Job Opportunities</a>
          <a href="supplies.html">Supplies Shops</a>
          </div>
        </div>
        <a href="login.php" class="lang-link">Login</a>
       
      </div>
    </div>
  </nav>

  <!-- Page Title -->
  <div class="page-title">
    <h1>Shopping Malls</h1>
    <div class="page-subtitle">Explore accessible shopping destinations in Egypt</div>
  </div>

  <!-- Grid of Places -->
  <div class="grid">

    <!--mall of egypt-->
    <div class="place-card">
      <div class="place-image-box">
      <a href="{{ url('malls/mallegypt') }}">


        <img src="image/image/images/09.jpg" alt="Mall of Egypt" />
        </a>
      </div>
      <div class="place-text-box">
        <div class="place-name">Mall Of Egypt</div>
        <div class="place-description">Shopping, Entertainment, Restaurants</div>
      </div>
    </div>

    <!-- CFC -->
    <div class="place-card">
      <div class="place-image-box">
      <a href="{{ url('malls/cfc') }}">

        <img src="image/image/images/90.jpg" alt="cai" class="contain-image" />
        </a>
      </div>
      <div class="place-text-box">
        <div class="place-name">Cairo Festival City</div>
        <div class="place-description">Shopping, Entertainment, Restaurants</div>
      </div>
    </div>

    <!-- city center almaza -->
    <div class="place-card">
      <div class="place-image-box">
      <a href="{{ url('malls/almaza') }}">

        <img src="image/image/images/a7.png" alt="city center" />
        </a>
      </div>
      <div class="place-text-box">
        <div class="place-name">City Centre Almaza</div>
        <div class="place-description">Shopping, Dining, Entertainment</div>
      </div>
    </div>

    <!-- Carrefour -->
    <div class="place-card">
      <div class="place-image-box">
      <a href="{{ url('malls/carrefour') }}">

        <img src="image/image/images/car.jpg" alt="Carrefour" class="contain-image" />
        </a>
      </div>
      <div class="place-text-box">
        <div class="place-name">Carrefour</div>
        <div class="place-description">groceries, Electronics, Household</div>
      </div>
    </div>

    <!-- Hyper One -->
    <div class="place-card">
      <div class="place-image-box">
      <a href="{{ url('malls/hyperone') }}">

        <img src="image/image/images/hy.jpg" alt="Hyper One" />
        </a>
      </div>
      <div class="place-text-box">
        <div class="place-name">Hyper One</div>
        <div class="place-description">groceries, Electronics, Household</div>
      </div>
    </div>

    <!-- LULU -->
    <div class="place-card">
      <div class="place-image-box">
      <a href="{{ url('malls/lulu') }}">

        <img src="image/image/images/lu.jpg" alt="lulu" />
        </a>
      </div>
      <div class="place-text-box">
        <div class="place-name">lulu</div>
        <div class="place-description">Supermarket, Household Needs</div>
      </div>
    </div>

  </div>

</body>
</html>
