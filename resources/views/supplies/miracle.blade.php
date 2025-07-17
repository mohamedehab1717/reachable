<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Miracle Medical Industries</title>
  <link rel="stylesheet" href="<?php echo asset('style/reach.css'); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-content">
      <a href="<?php echo url('/'); ?>" class="logo">Reachable</a>
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
        <a href="<?php echo url('/login'); ?>" class="lang-link">Login</a>
       
      </div>
    </div>
  </nav>

  <!-- Moving Image Slider -->
  <div class="slider-container">
    <div class="slider-track">
    <img src="<?php echo asset('image/image/images/k1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/k2.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/k3.png'); ?>" />
      <img src="<?php echo asset('image/image/images/k4.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/k1.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/k2.png'); ?>" />
      <img src="<?php echo asset('image/image/images/k3.jpg'); ?>" />
      <img src="<?php echo asset('image/image/images/k4.png'); ?>" />
      
    </div>
  </div>

  <!-- Supplies Info -->
  <div class="reachable-info">
    <h1>Miracle Medical Industries</h1>
    <div class="location">Cairo, Egypt</div>
    <p>
        ​Miracle Medical Industries is a leading Egyptian manufacturer of soft orthopedic and rehabilitation products, headquartered in Cairo. Established in 1996, the company specializes in producing a wide range of orthopedic, reconstructive, and postoperative products for various body parts, including the shoulder, knee, ankle, wrist, and elbow. Their product line comprises items such as knee supports, ankle supports, wrist braces, abdominal belts, surgical binders, arm slings, clavicle braces, and hernia belts. These products are made from pure Egyptian cotton, ensuring hypoallergenic properties and comfort during extended use. 
    </p>
  </div>

  <!-- Products Section -->
  <div class="key-info">
    <h2>Products</h2>
    <ul>
      <li><strong>-</strong> Knee and Ankle Braces – Help individuals with joint instability or neuromuscular conditions maintain better movement and balance.</li>
      <li><strong>-</strong> Elbow, Wrist, and Shoulder Braces – Useful for individuals with muscle weakness or post-stroke support.</li>
      <li><strong>-</strong> Lumbo-Sacral and Back Braces – Provide posture support for individuals with spinal deformities or low back weakness.</li>
      <li><strong>-</strong> Neck Collars (Soft and Hard) – Often used for children or adults with head and neck control issues (e.g., cerebral palsy).</li>
      <li><strong>-</strong> Abdominal and Chest Binders – Assist individuals with weak abdominal muscles or after surgeries, common among those with developmental disabilities.</li>
      <li><strong>-</strong> Clavicle Braces & Posture Correctors – Improve posture and prevent deformities from prolonged wheelchair use or improper seating.</li>
      <li><strong>-</strong> Wheelchairs / Walkers / Standing frames</li>
    </ul>
  </div>

  <!-- Location Section -->
  <div class="key-info">
    <h2>Location</h2>
    <p><strong>Address:</strong> 4 Fawzi St., El Mahaba Tower, Saraya El Koba, Cairo, Egypt (in front of the Republican Palace)</p>
    <div class="map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3451.728470332092!2d31.3064871!3d30.101961900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458157f3ee4a725%3A0x5e32f19c3c9564e!2sMiracle%20Medical%20Industries!5e0!3m2!1sen!2seg!4v1745278091081!5m2!1sen!2seg" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="key-info" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 40px;">
    <h2>Contact</h2>
    <p><strong>Phone:</strong> +20 2 2283 4742 / 2283 5530 / 2284 1780 / 2284 4655</p>
    <p><strong>Email:</strong> miracle@miraclegroup.com.eg ​</p>
  </div>

  <!-- Feedback Section Combined -->
  <div style="max-width: 800px; margin: 50px auto; background: #fff; border-radius: 20px; box-shadow: 0 8px 20px rgba(0,0,0,0.08); padding: 30px;">
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
