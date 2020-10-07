@extends('layouts.app')

@section('content')
<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/e838e8d238.js" crossorigin="anonymous"></script>

<style>
/*******************************
* Does not work properly if "in" is added after "collapse".
* Get free snippets on bootpen.com
*******************************/
    .panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }

/* ----- v CAN BE DELETED v ----- */


.demo {
    padding-top: 60px;
    padding-bottom: 60px;
}






.shape{
  border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
-ms-transform:rotate(360deg); /* IE 9 */
-o-transform: rotate(360deg);  /* Opera 10.5 */
-webkit-transform:rotate(360deg); /* Safari and Chrome */
transform:rotate(360deg);
}
.offer{
background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform:rotate scale(1.1);
  -webkit-transition: all 0.4s ease-in-out;
-moz-transition: all 0.4s ease-in-out;
-o-transition: all 0.4s ease-in-out;
transition: all 0.4s ease-in-out;
  }
.shape {
border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
border-color: transparent #f0ad4e transparent transparent;
}

.shape-text{
color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
-ms-transform:rotate(30deg); /* IE 9 */
-o-transform: rotate(360deg);  /* Opera 10.5 */
-webkit-transform:rotate(30deg); /* Safari and Chrome */
transform:rotate(30deg);
}
.offer-content{
padding:0 20px 10px;
}
@media (min-width: 487px) {
.container {
  max-width: 750px;
}
.col-sm-6 {
  width: 50%;
}
}
@media (min-width: 900px) {
.container {
  max-width: 970px;
}
.col-md-4 {
  width: 33.33333333333333%;
}
}

@media (min-width: 1200px) {
.container {
  max-width: 1170px;
}
.col-lg-3 {
  width: 25%;
}
}


</style>




    <div class="row justify-content-center" style="width:100%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                  Panel GoiShop
                  <hr>


                  <a class="btn btn-outline-primary" href="{{ URL::to('/') }}/products_list">
                      <span class="badge badge-info">
                      Inventario de Articulos <span class="lnr lnr-store">
                      </span>
                    </span>
                  </a>


                  <a class="btn btn-outline-primary" href="{{ URL::to('/') }}/categories_list">
                      <span class="badge badge-info">
                      Lista de Categorias <span class="lnr lnr-list"></span>
                      </span>
                    </span>
                  </a>


                  <a class="btn btn-outline-primary" href="{{ URL::to('/') }}/categories_list">
                      <span class="badge badge-info">
                      Reporte de Ventas <span class="lnr lnr-heart-pulse"></span>
                      </span>
                    </span>
                  </a>



                  <a class="btn btn-outline-primary" href="{{ URL::to('/') }}/categories_list">
                      <span class="badge badge-info">
                      Metodos de Pago <span class="lnr lnr-diamond"></span>
                      </span>
                    </span>
                  </a>



                  <a class="btn btn-outline-primary" href="{{ URL::to('/') }}/categories_list">
                      <span class="badge badge-info">
                      Blockchain <span class="lnr lnr-link"></span>
                      </span>
                    </span>
                  </a>



                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido, estas como Administrador!!


                    <hr>


<div class="row">


  <div class="col-md-6">
  <img src="{{ URL::to('/') }}/bk3.jpg" style="width:100%;" alt="Second slide">
  </div>





  <div class="col-md-6">



                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Administracion de Categorias <i class="fas fa-list-alt"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">

                                          <div style="padding:10px;">
                                            <h5>Lista de Categorias Vigentes</h5>
                                            <select class="form-control">
                                                  <option>Categorias Actuales ...</option>
                                                  @foreach($cats as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                  @endforeach

                                            </select>
                                            <hr>
                                            <h5>Agregar Categoria</h5>
                                            <form action="{{ URL::to('/') }}/add_category" method="post">
                                              @csrf
                                                    <input class="form-control"
                                                    style="width:60%;" name="name"
                                                     placeholder="Nombre de categoria (Una sola palabra)"/>
                                                    <button class="btn btn-outline-success"
                                                    style="margin-left:65%; margin-top:-65px; width:35%;"
                                                    >
                                                      Agregar</button>
                                            </form>

                                            <hr>
                                            <a class="text-danger" href="{{ URL::to('/') }}/categories_list">
                                              Borrar una Categoria
                                            <i class="fas fa-trash"></i></a>

                                            <div class="row" style="height:40px;"></div>
                                          </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Administracion de Articulos <i class="fas fa-tv"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                          <h5>Agregar</h5>
                                          <hr>
                                          <form action="{{ URL::to('/') }}/add_product" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <label>Titulo:</label>
                                            <input class="form-control"
                                            style="width:60%;" maxlength="30"
                                            name="title"
                                            placeholder="Titulo simple y certero"/>

                                            <label>Precio($):</label>
                                            <input class="form-control"
                                            style="width:60%;"
                                            name="price"
                                            step=".01"
                                            type="number"
                                            placeholder="Precio Neto en (MXN)"/>
                                            <br>

                                            <select class="form-control" name="id_category">
                                                  <option>Asigna un Categoria...</option>
                                                  @foreach($cats as $c)
                                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                                  @endforeach

                                            </select><br>

                                            <label>Imagen:</label>
                                            <input type="file" name="myImage"
                                            accept="image/x-png,image/gif,image/jpeg" />
    <br><br>

                                                  <label>Descripcion:</label>
                                                  <input class="form-control"
                                                  style="width:60%;"
                                                  maxlength="100"
                                                  name="description"
                                                   placeholder="Nombre de categoria (Una sola palabra)"
                                                   />
                                                  <button class="btn btn-outline-success"
                                                  style="margin-left:65%; margin-top:-65px; width:35%;"
                                                  >
                                                    Agregar Articulo</button>
                                          </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                <i class="more-less glyphicon glyphicon-plus"></i>
                                                Administracion de Banners <i class="far fa-money-bill-alt"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>

                            </div><!-- panel-group -->


  </div>


</div>







<hr>

<div class="container">
	<div class="row">
		<h2>GoiShop </h2>
	</div>

    <div class="row">
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-danger">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-eye-open"></span>
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
					Usuarios Registro: <label class="label label-danger">323</label>
					</h3>
					<p>
						 Total de miembros:
						<br>
                        <div class="progress">
             <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-success">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon glyphicon glyphicon-th"></span>
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Articulos Catalogo : <label class="label label-success"> 323</label>
					</h3>
					<p>
						Total de articulos :
						<br>
                        <div class="progress">
             <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-radius offer-primary">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-user"></span>
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						 Historial Ventas : <label class="label label-primary"> 323</label>
					</h3>
					<p>
						Total de ventas:
						<br>
                        <div class="progress">
             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<div class="offer offer-info">
				<div class="shape">
					<div class="shape-text">
						<span class="glyphicon  glyphicon-home"></span>
					</div>
				</div>
				<div class="offer-content">
					<h3 class="lead">
						Historial Pagos : <label class="label label-info"> 323</label>
					</h3>
					<p>
						Pagos plataforma
						<br>
                        <div class="progress">
             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%" >
                     60%
                        </div>
                   </div>
					</p>
				</div>
			</div>
		</div>
        </div>
</div>












                </div>
            </div>
        </div>
    </div>

<script>
function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>
@endsection
