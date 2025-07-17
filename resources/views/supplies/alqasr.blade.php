<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Al Qasr El Tebi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo asset('style/reach.css'); ?>" />
</head>
<body>

<?php
// يمكنك لاحقًا وضع أكواد اتصال بقاعدة بيانات أو التعامل مع مدخلات POST هنا
?>

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
      <a href="login.php" class="lang-link">Login</a>
   
    </div>
  </div>
</nav>

<!-- Moving Image Slider -->
<div class="slider-container">
  <div class="slider-track">
     <img src="<?php echo asset('image/image/q1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q4.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q4.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/q4.jpg'); ?>" />
  </div>
</div>

<!-- Supplies Info -->
<div class="reachable-info">
  <h1>Al Qasr El Tebi</h1>
  <div class="location">Cairo, Egypt</div>
  <p>
    ​Al Qasr El Tebi (also known as Qasr Elteb) is a Cairo-based company specializing in the manufacturing, import, and distribution of medical equipment and supplies. The company caters to a diverse clientele, including hospitals, clinics, pharmacies, laboratories, and individual consumers.​
  </p>
</div>

<!-- Products Section -->
<div class="key-info">
  <h2>Products</h2>
  <ul>
    <?php
    $products = [
      "Electric Wheelchairs: Models like the Dr. Ortho DR-S01 and ANGEL-22 offer powered mobility solutions.",
      "Manual Wheelchairs: Lightweight and foldable options suitable for daily use.",
      "Walkers with Wheels and Seats: Assistive devices that provide stability and a resting option.",
      "Canes and Crutches: Supportive tools for individuals requiring assistance with balance and walking.",
      "Air Mattresses: Products like the Granzia Megatrix help prevent bedsores for individuals with limited mobility.",
      "Knee Braces: Such as the Flamingo R.O.M Knee Brace, offering adjustable support.",
      "Mini Pedal Exercisers: Devices that allow for low-impact exercise to improve circulation and muscle strength.",
      "Massage Devices: Tools to alleviate muscle tension and promote relaxation.​"
    ];
    foreach ($products as $product) {
      echo "<li><strong>-</strong> $product</li>";
    }
    ?>
  </ul>
</div>

<!-- Location Section -->
<div class="key-info">
  <h2>Location</h2>
  <p><strong>Address:</strong> 391 Ramsis Street, Cairo, Egypt</p>
  <div class="map">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.0179938735478!2d31.271493899999996!3d30.0650187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583ffce5f966d7%3A0xe87f96bcabebc9a3!2sQasr%20elteb!5e0!3m2!1sen!2seg!4v1745278965133!5m2!1sen!2seg" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<!-- Contact Section -->
<div class="key-info" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 40px;">
  <h2>Contact</h2>
  <p><strong>Phone:</strong> +20 122 770 4809</p>
  <p><strong>Email:</strong> --​</p>
</div>

<!-- Feedback Section Combined -->
<div style="max-width: 800px; margin: 50px auto; background: #fff; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.08); padding: 30px;">

  <!-- Top: Previous Feedbacks -->
  <div style="margin-bottom: 40px;">
    <h3 style="margin-bottom: 20px; color: #444;">What Others Said</h3>

    <?php
    $feedbacks = [
      ["text" => "The hospital was clean and organized!", "rating" => 4],
      ["text" => "Very professional doctors, highly recommend.", "rating" => 5],
      ["text" => "Reception was a bit slow, but overall good.", "rating" => 3]
    ];
    foreach ($feedbacks as $fb) {
      echo '<div class="feedback-card" style="margin-bottom: 20px; background: #f8f8f8; padding: 15px 20px; border-radius: 12px;">';
      echo '<p style="margin: 0; font-size: 15px;">"' . $fb['text'] . '"</p>';
      echo '<div style="color: #FFD700; margin-top: 5px;">' . str_repeat('★', $fb['rating']) . str_repeat('☆', 5 - $fb['rating']) . '</div>';
      echo '</div>';
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

<!-- Star Rating Script -->
<script>
const stars = document.querySelectorAll('#rating i');
let currentRating = 0;

stars.forEach((star, index) => {
  star.addEventListener('mouseover', () => highlightStars(index + 1));
  star.addEventListener('mouseout', () => highlightStars(currentRating));
  star.addEventListener('click', () => {
    currentRating = index + 1;
    highlightStars(currentRating);
  });
});

function highlightStars(rating) {
  stars.forEach((star, i) => {
    star.style.color = i < rating ? '#FFD700' : '#ccc';
  });
}

function submitFeedback() {
  const feedbackText = document.getElementById('feedback').value.trim();
  if (!feedbackText) {
    alert("Please enter your feedback before submitting.");
    return;
  }
  if (currentRating === 0) {
    alert("Please rate before submitting.");
    return;
  }

  document.getElementById('submit-message').innerText = "Thank you for your feedback!";
  console.log("Feedback:", feedbackText);
  console.log("Rating:", currentRating);
}
</script>

</body>
</html>
