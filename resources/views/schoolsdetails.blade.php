<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>{{ $school->title }}</title>
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
      <a href="{{ route('login') }}" class="lang-link">Login</a>
    
    </div>
  </div>
</nav>

<!-- Slider -->
<div class="slider-container">
  <div class="slider-track">
    @foreach([$school->img1, $school->img2, $school->img3, $school->img4, $school->img5, $school->img6, $school->img7, $school->img8] as $image)
      <img src="{{ asset('image/Image/' . $image) }}" />
    @endforeach
  </div>
</div>


<!-- School Info -->
<div class="reachable-info">
  <h1>{{ $school->title }}</h1>
  <div class="location">{{ $school->location }}</div>
  <p>{{ $school->description }}</p>
</div>

<!-- Faculties (optional section, if you want static faculties you can keep them otherwise you can remove this block) -->
<div class="key-info">
  <h2>Faculties/Acadmeic Programs</h2>
  <ul>
    <?php
      // جلب البيانات من قاعدة البيانات
      $faculties = DB::table('faculties')->where('school_id', $school->id)->get();
      
      // التكرار على الأقسام وعرضها
      foreach ($faculties as $faculty) {
        echo "<li>- {$faculty->name}</li>";
      }
    ?>
  </ul>
</div>


<!-- Location -->
<div class="key-info">
  <h2>Location</h2>
  <p><strong>Address:</strong> {{ $school->address }}</p>
  <div class="map">
    <iframe 
      src="{{ $school->map_url }}" 
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<!-- Contact -->
<div class="key-info" style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 40px;">
  <h2>Contact</h2>
  <p><strong>Phone:</strong> {{ $school->phone }}</p>
  <p><strong>Email:</strong> {{ $school->email }}</p>
</div>

<!-- عرض التعليقات -->
<div class="feedback-section">
    @foreach ($school->feedbacks as $feedback)
        <div class="feedback-card">
            <p>{{ $feedback->comment }}</p>
            <div>
                @for ($i = 0; $i < $feedback->rating; $i++)
                    <i class="fas fa-star"></i>
                @endfor
            </div>
        </div>
    @endforeach
</div>  

<!-- إذا كانت هناك رسالة نجاح من عملية إرسال الفيدباك -->
@if (session('success'))
    <div class="submit-message" style="color: green; font-weight: bold;">
        {{ session('success') }}
    </div>
@endif

<!-- النموذج لإضافة التعليق -->
<form action="{{ route('feedback.store', $school->id) }}" method="POST">
    @csrf
    <label for="comment">Your Opinion</label>
    <textarea id="comment" name="comment" rows="5" style="width: 100%; padding: 12px; font-size: 15px; border: 1px solid #ccc; border-radius: 8px;" required></textarea>

    <div class="rating" style="margin-top: 20px;">
        <label>Your Rating:</label>
        <select name="rating" style="padding: 8px; font-size: 15px; border-radius: 5px;" required>
            <option value="1">1 Star</option>
            <option value="2">2 Stars</option>
            <option value="3">3 Stars</option>
            <option value="4">4 Stars</option>
            <option value="5">5 Stars</option>
        </select>
    </div>

    <button type="submit" style="margin-top: 25px; padding: 10px 30px; background-color: #007bff; color: white; border: none; border-radius: 8px; font-size: 16px; cursor: pointer;">
        Submit
    </button>
</form>

</body>
</html>
