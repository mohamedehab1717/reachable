<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/Login.css') }}">
    <title>Reachable</title>
</head>

<body>
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
        @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <!-- إضافة CSRF Token للحماية -->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" placeholder="Enter your First Name" required>

                <label for="secondname">Second Name</label>
                <input type="text" name="secondname" id="secondname" placeholder="Enter your Second Name" required>

                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>

                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>

                <button type="submit">Create new account</button>
            </form>
        </div>
    </div>

    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">Reachable</div>
            <div class="language-switcher">
               
            </div>
        </div>
    </nav>

</body>

</html>
