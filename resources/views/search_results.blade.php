<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GoiShop</title>

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
        <link rel="stylesheet" href="{{ URL::to('/') }}/js/alertifyjs/css/default.min.css" />
        <!-- Styles -->


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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






        </style>
    </head>
    <body>





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



    @if(!isset($user))

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






    <div class="row" id="category_div"
    style="min-height:90px; background-color:#020138; padding-left:50px;"
    >

      <div class="col-md-3">
        <h3 class="text-white" style="margin-top:70px; cursor:pointer;"
         onclick="filter_top(2);">Desarrollo <i class="fas fa-users"></i></h3>
      </div>
      <div class="col-md-3">
        <h3 class="text-white"
        onclick="filter_top(1);"
         style="margin-top:70px; cursor:pointer;">Diseño Gráfico <i class="fas fa-palette"></i></h3>
      </div>
      <div class="col-md-3">
        <h3 class="text-white"
        onclick="filter_top(3);"
        style="margin-top:70px; cursor:pointer;">Marketing Digital <i class="fas fa-mobile-alt"></i></h3>
      </div>
      <div class="col-md-3">
        <select class="form-control" id="category_selection" style="margin-top:64px; width:70%;">
              <option value="0">Seleccione Categoria...</option>
              @foreach($cats as $c)
                  <option value="{{$c->id}}">{{$c->name}}</option>
              @endforeach
        </select>
      </div>

    </div>









<div class="row" style="margin-top:-50px;">
<div id="carouselExampleIndicators"

 class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ URL::to('/') }}/gl1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('/') }}/gl2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ URL::to('/') }}/gl3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>














	<div class="row">
		<div class="col-md-12">
			<h2 class="text-danger">Resultados de <b class="text-primary">Tú Busqueda:</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
            @foreach($prods as $p)



            <div class="col-sm-3">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <a href="{{URL::to('/') }}/show_item/{{$p->id}}">
                  <img src="{{URL::to('/') }}/products/{{$p->img}}" class="img-responsive img-fluid" alt="">
                </a>
                </div>
                <div class="thumb-content">
                  <h4>{{$p->title}}</h4>
                  <p class="item-price"><strike>${{$p->price + 220}}</strike> <span style="font-size:16px;">${{$p->price}}</span></p>
                  <div class="star-rating">
                    <ul class="list-inline">
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star"></i></li>
                      <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                    </ul>
                  </div>
                  <a href="#" class="btn btn-primary"
                  onclick="cart_add('{{$p->id}}');"
                  >

                    Comprar Curso <i class="fas fa-shopping-cart"></i></a>
                </div>
              </div>
            </div>

            @endforeach
					</div>
				</div>





			</div>

		</div>




      <div class="container">{{ $prods->links() }}</div>
		</div>






	</div>





















<!-- Footer -->
<footer class="page-footer font-small teal pt-4 row"
style="margin-top:50px; background-color:#020138; color:#fff; width:100%; padding-left:30px;">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase font-weight-bold">GoiShop Online <i class="fas fa-store-alt"></i></h5>
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
  <div class="container text-center">
    © 2020 GoiShop:
    <a href="https://goicoin.net/"> By Green Oceans Blockchain</a>
  </div>
  <!-- Copyright -->

</div>
<!-- Footer -->






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
      $("#showI").css("margin-top","50px");
      $("#input_search").css("margin-top","10px");
      $("#btn_search").css("margin-left","0px");
      $("#shopingcart_btn").css("margin-left","0px");
      $("#navbarDropdown").css("margin-left","0px");
      $("#btn_add").css("margin-top","-50px");
      $("#img_prod").remove("margin-top","50px");
      $("#pop").append('<button class="btn btn-outline-success" id="btn_add" style="margin-top:5px;">Comprar Ahora <i class="fas fa-cart-plus"></i></button>');
}

$( "#category_selection" ).change(function() {
  filter_top($( this ).val());
});

  function filter_top(id){
    var form = document.createElement("form");
    var element1 = document.createElement("input");
    var element2 = document.createElement("input");
    form.method = "POST";
    form.action = "{{URL::to('/') }}/search";
    element1.value=id;
    element1.name="category";
    form.appendChild(element1);
    element2.value="{{ csrf_token() }}";
    element2.name="_token";
    form.appendChild(element2);
    document.body.appendChild(form);
    form.submit();
  }









  function cart_add(id){
    var user = '@if(isset($user)){{$user->email}}@endif';
    if(user == ''){
      alertify.success('Accede o Registrate Gratis para usar Carrito!!');
      //window.location.href = "{{URL::to('/') }}/login";
    }else{
      // logica de agregar a carrito
      alertify.success('Agredado a tu Carrito!!');
      var form = document.createElement("form");
      var element1 = document.createElement("input");
      var element2 = document.createElement("input");
      var element3 = document.createElement("input");
      form.method = "POST";
      form.action = "{{URL::to('/') }}/sc_add";
      element1.value='@if(isset($user)){{$user->id}}@endif';
      element1.name="id_user";
      form.appendChild(element1);
      element2.value="{{ csrf_token() }}";
      element2.name="_token";
      form.appendChild(element2);

      element3.value=id;
      element3.name="id_product";
      form.appendChild(element3);

      document.body.appendChild(form);
      form.submit();
    }
  }
</script>
    </body>
</html>
