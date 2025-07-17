<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Elmasryia Medical Supplies</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo asset('style/reach.css'); ?>" />
</head>
<body>

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

<!-- Moving Image Slider -->
<div class="slider-container">
  <div class="slider-track">
  <img src="<?php echo asset('image/image/e1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e4.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e4.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/e4.jpg'); ?>" />
  </div>
</div>

<!-- Supplies Info -->
<div class="reachable-info">
  <h1>Elmasryia Medical Supplies</h1>
  <div class="location">Cairo, Egypt</div>
  <p>
    ​Elmasryia Medical Supplies is a Cairo-based company specializing in the import and distribution of medical devices and equipment. Established in 2012, the company has grown to serve the Egyptian healthcare market with a focus on cardiovascular, radiology, oncology, neurology, and wound care products.
  </p>
</div>

<!-- Products Section -->
<div class="key-info">
  <h2>Products</h2>
  <ul>
    <li><strong>-</strong> Cardiology & Vascular Devices</li>
    <li><strong>-</strong> Interventional Radiology Equipment</li>
    <li><strong>-</strong> Oncology & Aesthetic Products</li>
    <li><strong>-</strong> Neurology Instruments</li>
    <li><strong>-</strong> Wound Care Solutions</li>
  </ul>
</div>

<!-- Location Section -->
<div class="key-info">
  <h2>Location</h2>
  <p><strong>Address:</strong> 8931 Al-Furqan, El-Mokattam, Cairo, Egypt</p>
  <div class="map">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d221105.90382751758!2d31.6293491!3d30.0144801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fe3daed7455%3A0x9632a7740b6d0e37!2sELMASRIA%20IMPORT%20%26%20ELG!5e0!3m2!1sen!2seg!4v1745277197577!5m2!1sen!2seg"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<!-- Contact Section -->
<div class="key-info" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 40px;">
  <h2>Contact</h2>
  <p><strong>Phone:</strong> (+2) 0102 880 0526 / (+202) 228429457</p>
  <p><strong>Email:</strong> customer.service@elmasriaimport.org ​</p>
</div>

<!-- Feedback Section Combined -->
<div style="max-width: 800px; margin: 50px auto; background: #fff; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.08); padding: 30px;">

  <!-- Show Messages -->
  <?php if (!empty($successMessage)): ?>
    <div style="color: green; font-weight: bold; margin-bottom: 20px;"><?php echo htmlspecialchars($successMessage); ?></div>
  <?php elseif (!empty($errorMessage)): ?>
    <div style="color: red; font-weight: bold; margin-bottom: 20px;"><?php echo htmlspecialchars($errorMessage); ?></div>
  <?php endif; ?>

  <!-- Top: Previous Feedbacks -->
  <div style="margin-bottom: 40px;">
    <h3 style="margin-bottom: 20px; color: #444;">What Others Said</h3>

    <div class="feedback-card" style="margin-bottom: 20px; background: #f8f8f8; padding: 15px 20px; border-radius: 12px;">
      <p style="margin: 0; font-size: 15px;">"The hospital was clean and organized!"</p>
      <div style="color: #FFD700; margin-top: 5px;">★★★★☆</div>
    </div>

    <div class="feedback-card" style="margin-bottom: 20px; background: #f8f8f8; padding: 15px 20px; border-radius: 12px;">
      <p style="margin: 0; font-size: 15px;">"Very professional doctors, highly recommend."</p>
      <div style="color: #FFD700; margin-top: 5px;">★★★★★</div>
    </div>

    <div class="feedback-card" style="margin-bottom: 20px; background: #f8f8f8; padding: 15px 20px; border-radius: 12px;">
      <p style="margin: 0; font-size: 15px;">"Reception was a bit slow, but overall good."</p>
      <div style="color: #FFD700; margin-top: 5px;">★★★☆☆</div>
    </div>
  </div>

  <!-- Bottom: Submit Feedback -->
  <form method="POST" action="" onsubmit="return validateForm();">
    <h2 style="margin-bottom: 20px; color: #333;">Leave Your Feedback</h2>

    <label for="feedback" style="display: block; margin-bottom: 10px; font-weight: 600;">Your Opinion</label>
    <textarea name="feedback" id="feedback" rows="5" style="width: 100%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px; resize: vertical;"></textarea>

    <div style="margin-top: 20px;">
      <label style="font-weight: 600; display: block; margin-bottom: 10px;">Your Rating:</label>
      <div id="rating" style="font-size: 28px; color: #ccc; cursor: pointer;">
        <i class="fas fa-star" data-value="1"></i>
        <i class="fas fa-star" data-value="2"></i>
        <i class="fas fa-star" data-value="3"></i>
        <i class="fas fa-star" data-value="4"></i>
        <i class="fas fa-star" data-value="5"></i>
      </div>
      <input type="hidden" name="rating" id="rating-value" value="0">
    </div>

    <button type="submit" style="margin-top: 25px; padding: 10px 30px; background-color: #007bff; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer;">
      Submit
    </button>
  </form>

</div>

<!-- Star Rating Script -->
<script>
  const stars = document.querySelectorAll('#rating i');
  const ratingInput = document.getElementById('rating-value');
  let currentRating = 0;

  stars.forEach((star, index) => {
    star.addEventListener('mouseover', () => highlightStars(index + 1));
    star.addEventListener('mouseout', () => highlightStars(currentRating));
    star.addEventListener('click', () => {
      currentRating = index + 1;
      ratingInput.value = currentRating;
      highlightStars(currentRating);
    });
  });

  function highlightStars(rating) {
    stars.forEach((star, i) => {
      star.style.color = i < rating ? '#FFD700' : '#ccc';
    });
  }

  function validateForm() {
    const feedbackText = document.getElementById('feedback').value.trim();
    if (!feedbackText) {
      alert("Please enter your feedback before submitting.");
      return false;
    }
    if (ratingInput.value == "0") {
      alert("Please rate before submitting.");
      return false;
    }
    return true;
  }
</script>

</body>
</html>
