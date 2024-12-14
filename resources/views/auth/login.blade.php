
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
    
        <!-- Hata mesajı, kullanıcı hatalı giriş yaparsa gösterilecek -->
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Hata!</strong> Kullanıcı adı veya şifre hatalı.
            </div>
        @endif
    
        <!-- Login Formu -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input value="{{ old('email') }}" type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024. Designed by <a href="https://github.com/yemresener" target="_blank">yemresener</a>.</p>
    </div>
    
</body>
</html>

