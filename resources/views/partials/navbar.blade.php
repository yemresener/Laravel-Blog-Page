<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!-- Bootstrap JavaScript (jQuery ve Popper.js dahil) -->   

</head>


<nav class="navbar navbar-expand-lg custom-navbar">
    <a class="navbar-brand" href="">Yunus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
</button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="categoriesDropdown">
                    @foreach ($categories as $c)
                        <a class="dropdown-item" href="{{route('categories',[$c->id])}}">{{ $c->name }}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>

            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{route('login_page')}}">Developer</a>
            </li>                            
            @endguest

            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
            </li>
            @endauth
        </ul>

        <!-- SEARCH BAR -->
        <form class="form-inline my-2 my-lg-0" action="{{route('home')}}" method="GET">
            <input name="search" class="form-control search-box" type="search" placeholder="Search" aria-label="Search" value="{{request()->search}}">
            <button class="btn btn-search" type="submit">Search</button>
        </form>
    </div>
</nav>

