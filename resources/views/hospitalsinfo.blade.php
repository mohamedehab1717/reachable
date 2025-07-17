
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>{{ $hospital->title }}</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('style/reach.css') }}" />
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
        <a href="{{ url('login') }}" class="lang-link">Login</a>
       
      </div>
    </div>
  </nav>

  <!-- Moving Image Slider -->
  <div class="slider-container">
  <div class="slider-track">
    @foreach([$hospital->info->img1, $hospital->info->img2, $hospital->info->img3, $hospital->info->img4, $hospital->info->img5, $hospital->info->img6, $hospital->info->img7, $hospital->info->img8] as $image)
      <img src="{{ asset('image/Image/' . $image) }}" />
    @endforeach
  </div>
</div>

  <!--  Hospital Info -->
  <div class="reachable-info">
  <h1>{{ $hospital->info->info }}</h1>
    <h1>{{ $hospital->info->name }}</h1>
    <div class="location">{{ $hospital->info->location }}</div>
    <p>
      {{ $hospital->info->des }}
    </p>
  </div>

  <!-- Features Section -->
  <div class="key-info">
  <h2>Features</h2>
  <ul>
    <?php
      // جلب البيانات من قاعدة البيانات
      $features = DB::table('features')->where('hospital_id', $hospital->id)->get();
      
      // التكرار على الأقسام وعرضها
      foreach ($features as $feature) {
        echo "<li>- {$feature->name}</li>";
      }
    ?>
  </ul>
</div>

  <!-- Location Section -->
  <div class="key-info">
    <h2>Location</h2>
    <p><strong>Address:</strong> {{ $hospital->info->address }}</p>
    <div class="map">
      <iframe 
        src="{{ $hospital->info->map_url }}"
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="key-info" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 40px;">
    <h2>Contact</h2>
    <p><strong>Phone:</strong> {{ $hospital->info->phone }}</p>
    <p><strong>Email:</strong> {{ $hospital->info->email ?? '--' }}</p>
  </div>

<!-- Feedback Section Combined -->
<div style="max-width: 800px; margin: 50px auto; background: #fff; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.08); padding: 30px;">

  <!-- Top: Previous Feedbacks -->
  <div style="margin-bottom: 40px;">
    <h3 style="margin-bottom: 20px; color: #444;">What Others Said</h3>

    <!-- هنا ممكن تعرض التعليقات من قاعدة البيانات -->
    <div class="feedback-card" style="margin-bottom: 20px; background: #f8f8f8; padding: 15px 20px; border-radius: 12px;">
      <p style="margin: 0; font-size: 15px;">"The hospital was clean and organized!"</p>
      <div style="color: #FFD700; margin-top: 5px;">★★★★☆</div>
    </div>

    <!-- تكرار عرض التعليقات -->
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
<footer style="text-align: center; padding: 20px; background-color: #39ced1; color: white;">
  &copy; 2025 Reachable. All rights reserved.
  
</footer>
</body>
</html>
