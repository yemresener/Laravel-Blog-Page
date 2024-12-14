<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Design</title>
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/get_post.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <!-- Navbar -->
  @include('partials.navbar')
  <!-- Navbar -->
  
      <div class="bosluk"></div>

        <div class="container">
            <!-- Main Image -->
            <div class="main-image">
                <img src="{{ asset($post->home_image) }}" alt="Main Image">
            </div>
    
            <!-- Main Title and Article -->
            <div class="main-content">
                <h1>{{$post->main_title}}</h1>
                <br><p>{{$post->main_article}}</p>
            </div>

            <!-- Low Sections -->

            @if ($post->low_title1 && $post->low_article1)
            <div class="low-section">
              <h2>{{$post->low_title1}}</h2>
              <p>{{$post->low_article1}}</p>
          </div>
            @endif
            
            @if ($post->low_title2 && $post->low_article2)
            <div class="low-section">
              <h2>{{$post->low_title2}}</h2>
              <p>{{$post->low_article2}}</p>
            </div>
            @endif

            @if ($post->low_title3 && $post->low_article3)
            <div class="low-section">
              <h2>{{$post->low_title3}}</h2>
              <p>{{$post->low_article3}}</p>
            </div>
            @endif
            
            @if ($post->low_title4 && $post->low_article4)
            <div class="low-section">
              <h2>{{$post->low_title4}}</h2>
              <p>{{$post->low_article4}}</p>
            </div>
            @endif
            
        </div>
    
        <div class="footer">
            <p>&copy; 2024 Your Website. Designed with ❤️ by <a href="#">You</a>.</p>
        </div>

</body>
</html>
