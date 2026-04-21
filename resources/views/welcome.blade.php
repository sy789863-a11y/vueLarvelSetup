<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>
    <main>
        <p>Explore our amazing content!</p>
        <a href="#" class="btn">Learn More</a>
        <button id="loginBtn"  class="btn">login</button>

        <button id="registerBtn" class="btn">Register</button>

    </main>
    <footer>
        <p>&copy; 2024 All rights reserved.</p>
    </footer>
</body>
<script>
    document.getElementById('loginBtn').addEventListener("click",function(){
        window.location.href = "/login";
    });
    document.getElementById('registerBtn').addEventListener('click',function(){
        window.location.href = '/res';
    });
</script>
</html>