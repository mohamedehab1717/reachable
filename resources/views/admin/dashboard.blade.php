@extends('layouts.app')

@section('content')
<!-- Navbar -->
<nav class="navbar" style="background-color: #333; padding: 10px 30px;">
  <div class="navbar-content" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
    <div class="left-side">
      <div class="logo" style="font-size: 24px; color: white; font-weight: bold;">Reachable - Admin</div>
    </div>
    <div class="right-side" style="display: flex; align-items: center; gap: 10px;"> <!-- إضافة gap لتقليل المسافات -->
      <a href="#manageSection" class="nav-link" style="color: #39ced1; font-size: 18px; font-weight: bold;">Manage</a>

      @if(session()->has('user'))
        <span style="color: white; margin-left: 10px;">Welcome {{ session('user')->firstname }} </span>
        <a href="{{ route('logout') }}" class="lang-link" style="color: white; margin-left: 10px;">Log Out</a>
      @else
        <a href="{{ route('login') }}" class="lang-link" style="color: white; margin-left: 10px;">Login</a>
      @endif

      <a href="#" class="lang-link" style="color: white; margin-left: 10px;">عربي</a>
    </div>
  </div>
</nav>

<!-- Intro Section -->
<section class="intro-section" style="position: relative; overflow: hidden;">
  <div class="video-banner" style="width: 100%; height: 500px;">
    <video autoplay loop playsinline muted style="object-fit: cover; width: 100%; height: 100%;">
      <source src="{{ asset('video/video/v.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="video-text-box" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; font-size: 2rem;">
      <h1>Welcome Admin</h1>
      <p class="motivational-text" style="font-size: 1.5rem; font-weight: 400;">
        Manage categories and control Reachable content easily.
      </p>
    </div>
  </div>
</section>

<!-- Manage Categories Section -->
<section id="manageSection" class="categories-section" style="background-color: #f9f9f9; padding: 60px 20px; text-align: center;">
  <div class="container" style="max-width: 800px; margin: auto; background-color: #fff; padding: 40px 30px; border-radius: 10px; box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);">
    <h2 class="section-title" style="color: #333; margin-bottom: 20px;">Manage Categories</h2>
    <p style="font-size: 1.2rem; color: #555; margin-bottom: 40px;">Add a new category below and manage your content efficiently.</p>

    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data" style="display: grid; gap: 20px;">
      @csrf

      <div class="form-group">
        <label for="type" style="font-weight: bold;">Category Type</label>
        <select id="type" name="type" class="form-control" required style="padding: 15px; font-size: 1rem; border-radius: 5px; border: 1px solid #ddd;">
          <option value="">-- Select Type --</option>
          <option value="school">School / College</option>
          <option value="hospital">Hospital / Clinic</option>
          <option value="restaurant">Restaurant / Cafe</option>
          <option value="mall">Shopping Mall</option>
          <option value="transport">Public Transport</option>
          <option value="sports">Adaptive Sports</option>
          <option value="job">Job Opportunity</option>
          <option value="shop">Supplies Shop</option>
        </select>
      </div>

      <div class="form-group">
        <label for="name" style="font-weight: bold;">Category Name</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Enter category name" required style="padding: 15px; font-size: 1rem; border-radius: 5px; border: 1px solid #ddd;">
      </div>

      <div class="form-group">
        <label for="description" style="font-weight: bold;">Category Description</label>
        <textarea id="des" name="des" class="form-control" placeholder="Enter description" rows="4" required style="padding: 15px; font-size: 1rem; border-radius: 5px; border: 1px solid #ddd;"></textarea>
      </div>

      <div class="form-group">
        <label for="photo" style="font-weight: bold;">Category Photo</label>
        <input type="file" id="img" name="img" class="form-control" required style="padding: 15px; font-size: 1rem; border-radius: 5px; border: 1px solid #ddd;">
      </div>

      <button type="submit" class="btn btn-primary" style="background-color: #39ced1; color: white; padding: 15px 30px; border: none; font-size: 1.1rem; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;">
        Add Category
      </button>
    </form>
    @php
    use App\Models\Category;
    $hospitalCategories = Category::where('type', 'hospital')->get();
    $schoolCategories = Category::where('type', 'school')->get();
@endphp

<div style="margin-top: 50px;">

 
</div>

  </div>
</section>

<footer style="text-align: center; padding: 20px; background-color: #39ced1; color: white; margin-top: 60px;">
  &copy; 2025 Reachable Admin Panel. All rights reserved.
</footer>

<script>
  // Dropdown toggle for categories
  document.querySelector('.dropbtn').addEventListener('click', function () {
    var dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
  });

  // Close the dropdown if clicked outside
  window.addEventListener('click', function (event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdownContent = document.querySelector('.dropdown-content');
      if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none';
      }
    }
  });
</script>

@endsection
