<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Gill+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="{{route('home')}}">Ana Sayfa</a></li>
                <li><a href="{{route('create_post')}}">Gönderi Oluştur</a></li>
                <li><a href="{{route('logout')}}">Çıkış</a></li>
            </ul>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>Hoşgeldiniz, {{ Auth::user()->name }}!</h1>
            </header>
            
            <!-- Stats Section -->
            <div class="stats">
                <div class="stat-box">
                    <h3>Toplam Gönderi Sayısı</h3>
                    <p>{{$categories->sum('get_posts_count') }}</p>
                </div>
                @foreach ($categories as $category)
                    <div class="stat-box">
                        <h3>{{ $category->name}}</h3> <!-- Kategori adı -->
                        <p>{{ $category->get_posts_count}}</p> <!-- Kategoriye ait post sayısı -->
                    </div>
                @endforeach

            </div>
            
            <!-- Graph Section -->
            <div class="graph-section" onclick="window.location.href='{{route('update_post',[$post])}}'">
                <div class="graph">
                    <h3>Son Gönderi</h3>
                    <div class="graph-box">
                        <img src="{{ asset($post->home_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
