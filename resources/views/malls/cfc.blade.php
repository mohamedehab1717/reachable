
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CFC</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo asset('style/nourhan.css'); ?>" />
</head>
<body>

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
      <a href="{{ url('/login') }}" class="lang-link">Login</a>
     
    </div>
  </div>
</nav>

<!-- Moving Image Slider -->
<div class="slider-container">
  <div class="slider-track">
  <img src="<?php echo asset('image/image/images/1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/2.jpeg'); ?>" />
      <img src="<?php echo asset('image/image/images/3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/2.jpeg'); ?>" />
      <img src="<?php echo asset('image/image/images/3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/2.jpeg'); ?>" />
      <img src="<?php echo asset('image/image/images/3.jpg'); ?>" />
  </div>
</div>

<!-- MALL info -->
<div class="reachable-info">
  <h1><?php echo "Cairo Festival City"; ?></h1>
  <div class="location"><?php echo "Cairo, Egypt"; ?></div>
  <p>
    Cairo Festival City (CFC) is one of the largest and most popular shopping and entertainment destinations in New Cairo.
    It features a wide range of international brands, restaurants, cafes, and cinemas, along with spacious outdoor areas
    that offer a relaxing and luxurious experience. It’s perfect for families, friends, and anyone looking for a complete shopping
    and leisure outing in one place.
  </p>
</div>

<!-- Features Section -->
<div class="key-info">
  <h2>Features</h2>
  <ul>
    <li><strong>-</strong> Wheelchair Friendly</li>
    <li><strong>-</strong> Accessible Parking</li>
    <li><strong>-</strong> Elevators Available</li>
    <li><strong>-</strong> Braille Signage</li>
    <li><strong>-</strong> Rest Areas</li>
  </ul>
</div>

<!-- Location Section -->
<div class="key-info">
  <h2>Location</h2>
  <p><strong>Address:</strong> Ring Rd, New Cairo 3, Cairo Governorate 4730020</p>
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27634.742358168638!2d31.391200640230995!3d30.02702194561503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583cfd5e540799%3A0x4a397398c27f4413!2sCairo%20Festival%20City%2C%20Nasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1745273525025!5m2!1sen!2seg"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<!-- Contact Section -->
<div class="key-info" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 40px;">
  <h2>Contact</h2>
  <p><strong>Phone:</strong> +20 122 770 4809</p>
  <p><strong>Email:</strong> --</p>
</div>

<!-- Feedback Section -->
<div style="max-width: 800px; margin: 50px auto; background: #fff; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.08); padding: 30px;">
  <!-- Top: Previous Feedbacks -->
  <div style="margin-bottom: 40px;">
    <h3 style="margin-bottom: 20px; color: #444;">What Others Said</h3>

    <?php
    // افتراضياً نعرض تقييمين ثابتين
    $feedbacks = [
      ["text" => "GOOD", "rating" => 4],
      ["text" => "Great PRODUCTS.", "rating" => 5]
    ];

    foreach($feedbacks as $fb) {
      echo '<div class="feedback-card" style="margin-bottom: 20px; background: #f8f8f8; padding: 15px 20px; border-radius: 12px;">';
      echo '<p style="margin: 0; font-size: 15px;">"' . htmlspecialchars($fb["text"]) . '"</p>';
      echo '<div style="color: #FFD700; margin-top: 5px;">';
      echo str_repeat('★', $fb["rating"]) . str_repeat('☆', 5 - $fb["rating"]);
      echo '</div></div>';
    }
    ?>
  </div>

  <!-- Bottom: Submit Feedback -->
  <div>
    <h2 style="margin-bottom: 20px; color: #333;">Leave Your Feedback</h2>

    <label for="feedback" style="display: block; margin-bottom: 10px; font-weight: 600;">Your Opinion</label>
    <textarea id="feedback" rows="5" style="width: 100%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px; resize: vertical;"></textarea>

    <div style="margin-top: 20px;">
      <label style="font-weight: 600; display: block; margin-bottom: 10px;">Your Rating:</label>
      <div id="rating" style="font-size: 28px; color: #ccc; cursor: pointer;">
        <i class="fas fa-star" data-value="1"></i>
        <i class="fas fa-star" data-value="2"></i>
        <i class="fas fa-star" data-value="3"></i>
        <i class="fas fa-star" data-value="4"></i>
        <i class="fas fa-star" data-value="5"></i>
      </div>
    </div>

    <button onclick="submitFeedback()" style="margin-top: 25px; padding: 10px 30px; background-color: #007bff; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer;">
      Submit
    </button>

    <div id="submit-message" style="margin-top: 15px; color: green; font-weight: bold;"></div>
  </div>
</div>

<script src="../../scripts/rating.js"></script>

</body>
</html>
