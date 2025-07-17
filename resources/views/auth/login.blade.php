<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/Login.css') }}">
    <title>Login - Reachable</title>
</head>

<body>
    <!-- Navbar بسيط -->
    <nav class="navbar">
        <div class="navbar-content">
            <div class="left-side">
                <div class="logo">Reachable</div>
            </div>
            <div class="right-side">
                <div class="language-switcher">
                  
                </div>
            </div>
        </div>
    </nav>

    <!-- Body الصفحة -->
    <div class="container">
        <div class="text">
            <h1>Reachable</h1>
            <pre>
Because every step matters, 
Reachable is here to guide you to places that truly see you. 
Reach your destination without limits.
            </pre>
        </div>

        <div class="login">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <button type="submit" class="login-account">Login</button>

                <hr>
            </form>

            <a href="{{ route('register') }}">
                <button type="button" class="create-account">Create new account</button>
            </a>
        </div>
    </div>
</body>
</html>
