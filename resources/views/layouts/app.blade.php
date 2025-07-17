<!DOCTYPE html>
<html lang="en">
@stack('styles')

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Reachable</title>
    <link rel="stylesheet" href="{{ asset('style/Home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('style/about.css') }}">
  
   

    @stack('styles')
</head>
<body>
    <header>
        @include('includes.navbar') 
    </header>
    <main>
        @yield('content') 
    </main>
    <footer>
        &copy; 2025 Reachable. All rights reserved.
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
</body>
</html>
