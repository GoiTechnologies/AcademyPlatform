<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mis Cursos</title>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e838e8d238.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <script src="{{ URL::to('/') }}/js/alertifyjs/alertify.min.js"></script>
        <!-- include the style -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/js/alertifyjs/css/alertify.min.css" />
        <!-- include a theme -->
        <link rel="stylesheet" href="{{ URL::to('/') }}/js/alertifyjs/css/themes/default.min.css" />

        <!-- Styles -->
  <style>
                HTML CSSResult
        @import url('https://fonts.googleapis.com/css?family=Abel');

        html, body {
        background: #FCEEB5;
        font-family: Abel, Arial, Verdana, sans-serif;
        }

        .center {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        }

        .card {
        width: 450px;
        height: 250px;
        background-color: #fff;
        background: linear-gradient(#f8f8f8, #fff);
        box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
        border-radius: 6px;
        overflow: hidden;
        position: relative;
        margin: 1.5rem;
        }

        .card h1 {
        text-align: center;
        }

        .card .additional {
        position: absolute;
        width: 150px;
        height: 100%;
        background: linear-gradient(#dE685E, #EE786E);
        transition: width 0.4s;
        overflow: hidden;
        z-index: 2;
        }

        .card.green .additional {
        background: linear-gradient(#92bCa6, #A2CCB6);
        }


        .card:hover .additional {
        width: 100%;
        border-radius: 0 5px 5px 0;
        }

        .card .additional .user-card {
        width: 150px;
        height: 100%;
        position: relative;
        float: left;
        }

        .card .additional .user-card::after {
        content: "";
        display: block;
        position: absolute;
        top: 10%;
        right: -2px;
        height: 80%;
        border-left: 2px solid rgba(0,0,0,0.025);*/
        }

        .card .additional .user-card .level,
        .card .additional .user-card .points {
        top: 15%;
        color: #fff;
        text-transform: uppercase;
        font-size: 0.75em;
        font-weight: bold;
        background: rgba(0,0,0,0.15);
        padding: 0.125rem 0.75rem;
        border-radius: 100px;
        white-space: nowrap;
        }

        .card .additional .user-card .points {
        top: 85%;
        }

        .card .additional .user-card svg {
        top: 50%;
        }

        .card .additional .more-info {
        width: 300px;
        float: left;
        position: absolute;
        left: 150px;
        height: 100%;
        }

        .card .additional .more-info h1 {
        color: #fff;
        margin-bottom: 0;
        }

        .card.green .additional .more-info h1 {
        color: #224C36;
        }

        .card .additional .coords {
        margin: 0 1rem;
        color: #fff;
        font-size: 1rem;
        }

        .card.green .additional .coords {
        color: #325C46;
        }

        .card .additional .coords span + span {
        float: right;
        }

        .card .additional .stats {
        font-size: 2rem;
        display: flex;
        position: absolute;
        bottom: 1rem;
        left: 1rem;
        right: 1rem;
        top: auto;
        color: #fff;
        }

        .card.green .additional .stats {
        color: #325C46;
        }

        .card .additional .stats > div {
        flex: 1;
        text-align: center;
        }

        .card .additional .stats i {
        display: block;
        }

        .card .additional .stats div.title {
        font-size: 0.75rem;
        font-weight: bold;
        text-transform: uppercase;
        }

        .card .additional .stats div.value {
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1.5rem;
        }

        .card .additional .stats div.value.infinity {
        font-size: 2.5rem;
        }

        .card .general {
        width: 300px;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 1;
        box-sizing: border-box;
        padding: 1rem;
        padding-top: 0;
        }

        .card .general .more {
        position: absolute;
        bottom: 1rem;
        right: 1rem;
        font-size: 0.9em;
        }


                    .full-height {
                        height: 100vh;
                    }

                    .flex-center {
                        align-items: center;
                        display: flex;
                        justify-content: center;
                    }

                    .position-ref {
                        position: relative;
                    }

                    .top-right {
                        position: absolute;
                        right: 10px;
                        top: 18px;
                    }

                    .content {
                        text-align: center;
                    }

                    .title {
                        font-size: 84px;
                    }

                    .links > a {
                        color: #636b6f;
                        padding: 0 25px;
                        font-size: 13px;
                        font-weight: 600;
                        letter-spacing: .1rem;
                        text-decoration: none;
                        text-transform: uppercase;
                    }

                    .m-b-md {
                        margin-bottom: 30px;
                    }

                    .navbar{
                      -webkit-box-shadow: 0px 7px 0px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 7px 0px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 7px 0px 0px rgba(0,0,0,0.75);
                    }




                    body {
        	font-family: "Open Sans", sans-serif;
        }
        h2 {
        	color: #000;
        	font-size: 26px;
        	font-weight: 300;
        	text-align: center;
        	text-transform: uppercase;
        	position: relative;
        	margin: 30px 0 80px;
        }
        h2 b {
        	color: #ffc000;
        }
        h2::after {
        	content: "";
        	width: 100px;
        	position: absolute;
        	margin: 0 auto;
        	height: 4px;
        	background: rgba(0, 0, 0, 0.2);
        	left: 0;
        	right: 0;
        	bottom: -20px;
        }
        .carousel {
        	margin: 50px auto;
        	padding: 0 70px;
        }
        .carousel .item {
        	min-height: 330px;
            text-align: center;
        	overflow: hidden;
        }
        .carousel .item .img-box {
        	height: 160px;
        	width: 100%;
        	position: relative;
        }
        .carousel .item img {
        	max-width: 100%;
        	max-height: 100%;
        	display: inline-block;
        	position: absolute;
        	bottom: 0;
        	margin: 0 auto;
        	left: 0;
        	right: 0;
        }
        .carousel .item h4 {
        	font-size: 18px;
        	margin: 10px 0;
        }
        .carousel .item .btn {
        	color: #333;
            border-radius: 0;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: bold;
            background: none;
            border: 1px solid #ccc;
            padding: 5px 10px;
            margin-top: 5px;
            line-height: 16px;
        }
        .carousel .item .btn:hover, .carousel .item .btn:focus {
        	color: #fff;
        	background: #000;
        	border-color: #000;
        	box-shadow: none;
        }
        .carousel .item .btn i {
        	font-size: 14px;
            font-weight: bold;
            margin-left: 5px;
        }
        .carousel .thumb-wrapper {
        	text-align: center;
        }
        .carousel .thumb-content {
        	padding: 15px;
        }
        .carousel .carousel-control {
        	height: 100px;
            width: 40px;
            background: none;
            margin: auto 0;
            background: rgba(0, 0, 0, 0.2);
        }
        .carousel .carousel-control i {
            font-size: 30px;
            position: absolute;
            top: 50%;
            display: inline-block;
            margin: -16px 0 0 0;
            z-index: 5;
            left: 0;
            right: 0;
            color: rgba(0, 0, 0, 0.8);
            text-shadow: none;
            font-weight: bold;
        }
        .carousel .item-price {
        	font-size: 13px;
        	padding: 2px 0;
        }
        .carousel .item-price strike {
        	color: #999;
        	margin-right: 5px;
        }
        .carousel .item-price span {
        	color: #86bd57;
        	font-size: 110%;
        }
        .carousel .carousel-control.left i {
        	margin-left: -3px;
        }
        .carousel .carousel-control.left i {
        	margin-right: -3px;
        }
        .carousel .carousel-indicators {
        	bottom: -50px;
        }
        .carousel-indicators li, .carousel-indicators li.active {
        	width: 10px;
        	height: 10px;
        	margin: 4px;
        	border-radius: 50%;
        	border-color: transparent;
        }
        .carousel-indicators li {
        	background: rgba(0, 0, 0, 0.2);
        }
        .carousel-indicators li.active {
        	background: rgba(0, 0, 0, 0.6);
        }
        .star-rating li {
        	padding: 0;
        }
        .star-rating i {
        	font-size: 14px;
        	color: #ffc000;
        }

        body {
               color: #566787;
           background: #f5f5f5;
           font-family: 'Varela Round', sans-serif;
           font-size: 13px;
         }
         .table-wrapper {
               background: #fff;
               padding: 20px 25px;
               margin: 30px 0;
           border-radius: 3px;
               box-shadow: 0 1px 1px rgba(0,0,0,.05);
           }
         .table-title {
           padding-bottom: 15px;
           background: #299be4;
           color: #fff;
           padding: 16px 30px;
           margin: -20px -25px 10px;
           border-radius: 3px 3px 0 0;
           }
           .table-title h2 {
           margin: 5px 0 0;
           font-size: 24px;
         }
         .table-title .btn {
           color: #566787;
           float: right;
           font-size: 13px;
           background: #fff;
           border: none;
           min-width: 50px;
           border-radius: 2px;
           border: none;
           outline: none !important;
           margin-left: 10px;
         }
         .table-title .btn:hover, .table-title .btn:focus {
               color: #566787;
           background: #f2f2f2;
         }
         .table-title .btn i {
           float: left;
           font-size: 21px;
           margin-right: 5px;
         }
         .table-title .btn span {
           float: left;
           margin-top: 2px;
         }
           table.table tr th, table.table tr td {
               border-color: #e9e9e9;
           padding: 12px 15px;
           vertical-align: middle;
           }
         table.table tr th:first-child {
           width: 60px;
         }
         table.table tr th:last-child {
           width: 100px;
         }
           table.table-striped tbody tr:nth-of-type(odd) {
             background-color: #fcfcfc;
         }
         table.table-striped.table-hover tbody tr:hover {
           background: #f5f5f5;
         }
           table.table th i {
               font-size: 13px;
               margin: 0 5px;
               cursor: pointer;
           }
           table.table td:last-child i {
           opacity: 0.9;
           font-size: 22px;
               margin: 0 5px;
           }
         table.table td a {
           font-weight: bold;
           color: #566787;
           display: inline-block;
           text-decoration: none;
         }
         table.table td a:hover {
           color: #2196F3;
         }
         table.table td a.settings {
               color: #2196F3;
           }
           table.table td a.delete {
               color: #F44336;
           }
           table.table td i {
               font-size: 19px;
           }
         table.table .avatar {
           border-radius: 50%;
           vertical-align: middle;
           margin-right: 10px;
         }
         .status {
           font-size: 30px;
           margin: 2px 2px 0 0;
           display: inline-block;
           vertical-align: middle;
           line-height: 10px;
         }
           .text-success {
               color: #10c469;
           }
           .text-info {
               color: #62c9e8;
           }
           .text-warning {
               color: #FFC107;
           }
           .text-danger {
               color: #ff5b5b;
           }
           .pagination {
               float: right;
               margin: 0 0 5px;
           }
           .pagination li a {
               border: none;
               font-size: 13px;
               min-width: 30px;
               min-height: 30px;
               color: #999;
               margin: 0 2px;
               line-height: 30px;
               border-radius: 2px !important;
               text-align: center;
               padding: 0 6px;
           }
           .pagination li a:hover {
               color: #666;
           }
           .pagination li.active a, .pagination li.active a.page-link {
               background: #03A9F4;
           }
           .pagination li.active a:hover {
               background: #0397d6;
           }
         .pagination li.disabled i {
               color: #ccc;
           }
           .pagination li i {
               font-size: 16px;
               padding-top: 6px
           }
           .hint-text {
               float: left;
               margin-top: 10px;
               font-size: 13px;
           }

</style>
    </head>
    <body>

      <nav class="navbar navbar-expand-lg navbar-light fixed-top"
      style="background-color:#08053a; color:#fff;">
      <a class="navbar-brand" href="{{ URL::to('/home') }}">
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



    @if(!$user)

          <li class="nav-item text-right" style="padding-left:20px; ">
            <a class="nav-link btn btn-outline-info" style="height:39px; color:#fff;"
            href="{{ URL::to('/') }}/login">Acceder <i class="fas fa-sign-in-alt"></i></a>
          </li>
          <li class="nav-item" style="padding-left:20px;">
            <a class="nav-link btn btn-outline-info" style="height:39px; color:#fff;" href="{{ URL::to('/') }}/register">Registro <i class="fas fa-user-plus"></i></a>
          </li>
    @else

    <li class="nav-item text-right" style="padding-left:20px; ">
      <a class="nav-link btn btn-outline-info" style="height:39px; color:#fff;"
      href="{{ URL::to('/') }}/logout">
      {{$user->name}} <i class="fas fa-user"></i>
      Salir <i class="fas fa-sign-in-alt"></i></a>
    </li>

    @endif



        </ul>

      </div>
    </nav>


















<div class="row" id="div_main" style="margin-top:50px; width:100%;">

<div class="col-md-8 text-center" >
    <br>
  <div class="embed-responsive embed-responsive-16by9" >
  <video id="video_field" class="embed-responsive-item" controlsList="nodownload" controls
  src=""
  allowfullscreen></video>
  </div>

  <div class="text-center">
      <h2>IDE:{{$_GET['ide']}} <i class="fas fa-book"></i> Curso: {{$curso->title}} </h2>
      <div class="alert alert-warning" role="alert" style="margin-left:20px; margin-top:-30px;">
      <h4 class="alert-heading" id="title_h">Selecciona un video de la derecha!!
        <i class="fas fa-hand-point-right"></i>
        <i class="fas fa-hand-point-right"></i>
        <i class="fas fa-hand-point-right"></i>
      </h4>

      <div style="background-color:#08053a; color:#fff; height:50px; padding:10px;">
      <h4 class="alert-heading">Comentarios:</h4>
    </div>
    <br>
      @foreach($coms as $com)
      <p class="mb-0">
        <strong>Usuario: {{ $com->usermail_id }}</strong><br>
          {{ $com->commit }}
      </p>
         <div>
           <p>
         <strong>Fecha: {{ $com->created_at}}</strong>
       </div>
        <hr>
      @endforeach





<form method="post" action="{{ URL::to('/') }}/save_commit">
      <div class="row">



        @csrf
        <div class="col-md-8">
          <input class="form-control"
          name="commit_val"
          placeholder="realiza un breve comentario o alguna duda..."/>
          <input
          name="ide" value="{{$curso->id}}" hidden/>
        </div>
        <div class="col-md-4">
            <button class="btn btn-outline-success" type="submit">
                Hacer cometario <i class="fas fa-comment-dots"></i>
            </button>
        </div>
      </div>
      </div>

</form>

  </div>

</div>





<div class="col-md-4">
  <div class="card" style="min-height:530px; height:auto;">
    <div class="card-header">
      Capitulos de este Curso
    </div>
      <ul class="list-group list-group-flush">

        @foreach($routes as $r)
          <li class="list-group-item">

            <?php
            $conter = 0;
            $chars = str_split($r->route);
            $last = 0;
            $b = true;
            foreach($chars as $char){
                if($char == '/'){
                  $last = $conter;
                    $conter++;
                }
                $conter++;
            }
            $begin = substr($r->route, $last);
            echo '<div onclick="send_route('.$r->id.',`'.$begin.'`)" style="cursor:pointer;"><i class="far fa-play-circle"></i> '.$begin.'</div>';

            ?>



          </li>
        @endforeach


      </ul>
  </div>
</div>










<div class="modal fade"
id="exampleModal" tabindex="-1"
style="margin-top:1%;"
 role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img width="100%" src="{{ URL::to('/') }}/metodo.png"/>

      </div>
      <div class="modal-body">

        <div class="row text-center">
          <div class="col-md-12" style="padding-bottom:20px;">
              <img width="100%" src="{{ URL::to('/') }}/goicoinpay.png"/>
          </div>
          <div class="col-md-12" style="padding-bottom:20px;">
              <img width="100%" src="{{ URL::to('/') }}/taget.png"/>
          </div>
          <div class="col-md-12" style="padding-bottom:20px;">

          </div>
          <div class="col-md-12" style="padding-bottom:20px;">
            <hr>
            <h5>Total a Pagar:</h5>
              <h3 class="text-dark">$90,000.00 MXN</h3>

              <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
          </div>
        </div>


      </div>

    </div>
  </div>
</div>




<!-- Footer -->
<footer class="page-footer font-small teal pt-4"
style="margin-top:100px; background-color:#020138; color:#fff; width:100%; padding-left:30px; margin-bottom:0px;">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Goi Learn <i class="fas fa-store-alt"></i></h5>
        <p>Los articulos en venta asi como su envio estan sujetos a disponivilidad de stock y
        posibilidad de envio, para dudas y ó aclaraciones  puedes consultarnos al correo: soporte@goicoin.net ó
      al Telefono: 52 33XX XXXX</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">Aviso de Privacidad <i class="fas fa-exclamation-circle"></i></h5>
        <p>Este sitio recopila cookies para ofrecer una experiencia de navegacion personalizada,
        Los datos personales recolectados son protegidos y asegurados, puedes descargar el documento
       oficial de aviso de privacidad desde <a href="#">Aquí</a></p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 GoiShop:
    <a href="https://goicoin.net/"> By Green Oceans Blockchain</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script>
function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
if(isMobileDevice()){
      $("#category_div").remove();
      $("#banners").css("margin-top","50px");
      $("#input_search").css("min-width","300px");
      $("#input_search").css("width","100%");
      $("#input_search").css("margin-top","10px");
      $("#btn_search").css("margin-left","0px");
      $("#shopingcart_btn").css("margin-left","0px");
      $("#navbarDropdown").css("margin-left","0px");
      $("#div_main").css("margin-top","70px");

}


function send_route(ide,text){
  new_route = '';
  @foreach($routes as $r2)
    if('{{$r2->id}}' == ide){
      new_route = '{{$r2->route}}';
    }
  @endforeach
  asset = '{{ URL::to(`/`) }}'+new_route;
  //alert(asset);
  $('#video_field').attr('src', asset);
  //$("#video_field video")[0].load();
  $("#title_h").empty();
  $("#title_h").append('Capitulo:'+ide+''+text.replace('.mp4',''));

}
</script>
    </body>
</html>
