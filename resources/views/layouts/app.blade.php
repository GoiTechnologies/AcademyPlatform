<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Goi Learn</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="{{ URL::to('/') }}/js/alertifyjs/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/js/alertifyjs/css/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/js/alertifyjs/css/themes/default.min.css" />

</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top"
        style="background-color:#08053a; color:#fff;">
        <a class="navbar-brand" href="{{ URL::to('/') }}">
          <img
          src="{{ URL::to('/') }}/logo_fix.png"
          style="margin-top:-5px;"
           width="110px"/>
        </a>

        <button class="navbar-toggler" type="button"
        data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">


          <form action="{{ URL::to('/') }}/search" method="post">
            @csrf
          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <input class="form-control mr-sm-2"
                id="input_search" name="search" type="search" style="min-width:700px;"
                placeholder="Busca tus cursos o temas de interes..." aria-label="Search">
            </li>


            <li class="nav-item">
                <button class="btn btn-outline-info my-2 my-sm-0" id="btn_search"
                style="margin-left:50px; color:#fff;"
                 type="submit">Buscar <i class="fas fa-search"></i></button>
            </li>
      </form>


            <li class="nav-item">


                <a class="nav-item btn btn-outline-info"
                style="margin-left:15px;" id="shopingcart_btn"
                onclick="window.location.href = '{{ URL::to('/') }}/checkout';"
               >Mis Cursos<i class="fas fa-shopping-cart"></i> </a>


            </li>




            <li class="nav-item text-right" style="padding-left:20px; ">
              <a class="nav-link btn btn-outline-info" style="height:39px; color:#fff;"
              href="{{ URL::to('/') }}/login">Acceder <i class="fas fa-sign-in-alt"></i></a>
            </li>
            <li class="nav-item" style="padding-left:20px;">
              <a class="nav-link btn btn-outline-info" style="height:39px; color:#fff;" href="{{ URL::to('/') }}/register">Registro <i class="fas fa-user-plus"></i></a>
            </li>




          </ul>

        </div>
      </nav>
        <main class="py-4" style="margin-top:5%;">
            @yield('content')
        </main>
    </div>


    <script type="text/javascript">
      //alertify.alert('Ready!');
    </script>
</body>
</html>
