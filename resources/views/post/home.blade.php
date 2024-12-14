<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    
    @if(session('success'))
    <script type="text/javascript">
        Swal.fire({
            icon: 'success',
            title: 'Başarılı!',
            text: '{{ session('success') }}',
            confirmButtonText: 'Tamam'
        });
    </script>
  @endif
  <!-- Navbar -->
    @include('partials.navbar')
  <!-- Navbar -->


      <div class="bosluk"></div>
    @foreach ($posts as $p)
    @auth
    <a class="update_img" href="{{route('update_post',[$p])}}"><i class="fa-solid fa-pen-to-square"></i>Düzenle</a> 
    @endauth

    <div class="divs" onclick="window.location.href='{{route('post_view',[$p])}}'">
        <img class="main_images" src="{{ asset($p->home_image) }}" alt="">
        
        <h1>{{ $p->main_title }}</h1>
        <h5>{{ $p->get_category->name }}</h5>
        <label>{{ \Str::limit($p->main_article, 35) }}
          <br> 
        </label>
    </div>

    <br>
    
</a>
    @endforeach

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->appends(request()->except('page'))->links() }}
  </div>

    <div class="footer">
      <p>&copy; 2024. Designed by <a href="https://github.com/yemresener">yemresener</a>.</p>
    </div>
</body>
</html>