<style>
   * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html, body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f4f8;
      overflow-x: hidden;
      scroll-snap-type: y mandatory;
      height: 100vh;
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #f7f7f7;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: rgb(57, 206, 209);
      padding: 10px 20px;
      z-index: 1000;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      text-decoration: none;
      font-size: 20px;
      font-weight: bold;
      color:white;
    }

    .search-box {
      position: relative;
      width: 500px;
      margin-right: 610px;
    }

    .search-box input {
      padding: 8px 35px 8px 15px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
    }

    .search-box .search-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #333;
      font-size: 18px;
    }

    .lang-link {
      text-decoration: none;
      color: #ffffff;
      font-weight: 400;
      font-size: 15px;
      position: relative;
      transition: all 0.3s ease;
    }

    .right-side {
       display: flex;
       align-items: center;
       gap: 30px; /* توسع المسافات بين الروابط */
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropbtn {
      background: none;
      border: none;
      color: #ffffff;
      font-weight: 400;
      font-size: 16px;
      font-family: 'Poppins', sans-serif;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #ffffff;
      min-width: 200px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      z-index: 1000;
      border-radius: 8px;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    
    
    .dropdown:hover .dropdown-content {
      display: block;
    }

    .language-switcher {
      display: flex;
      gap: 15px;
      margin-right: -70px;
    }

    .lang-link {
      text-decoration: none;
      color: #ffffff;
      font-weight: 400;
      font-size: 15px;
      position: relative;
      transition: all 0.3s ease;
    }

    .lang-link:hover::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      height: 2px;
      width: 100%;
      background-color: #fff;
    }

    .job {
      display: flex;
      flex-direction: column;
      height: 100vh;
      justify-content: center;
      padding: 60px 5%;
      background-color: #fff;
      scroll-snap-align: start;
      scroll-snap-stop: always;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .text {
      width: 45%;
    }

    .text h3 {
      font-size: 28px;
      color: #1e1e1e;
      margin-bottom: 20px;
    }

    .text p {
      font-size: 18px;
      color: #444;
      line-height: 1.7;
    }

    .images {
      width: 50%;
      position: relative;
      min-height: 300px;
    }

    .images img {
      position: absolute;
      border-radius: 20px;
      object-fit: cover;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      aspect-ratio: 1/1;
    }

    .images img:nth-child(1) {
      width: 60%;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      z-index: 3;
    }

    .images img:nth-child(2) {
      width: 40%;
      top: -40%;
      right: -60px;
      z-index: 2;
    }

    .images img:nth-child(3) {
      width: 30%;
      bottom: -100px;
      right: -35px;
      z-index: 1;
    }

    @media (max-width: 768px) {
      .content {
        flex-direction: column;
      }

      .text, .images {
        width: 100%;
      }

      .images {
        height: 300px;
        margin-top: 20px;
      }

      .images img:nth-child(1) {
        width: 55%;
      }

      .images img:nth-child(2),
      .images img:nth-child(3) {
        width: 30%;
      }
    }

  </style>

<div class="jobs-container">
  @foreach($jobs as $job)
    <div class="job">
      <div class="content">
        <div class="text">
          <h3>{{ $job->context }}</h3>
          <p>{{ $job->text }}</p>
        </div>
        <div class="images">
          @foreach([$job->image1, $job->image2, $job->image3, $job->image4] as $image)
            @if($image)
              <img src="{{ asset('image/Image/' . $image) }}" />
            @endif
          @endforeach
        </div>    
      </div>
    </div> <!-- نهاية job لكل سلايد -->
  @endforeach
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