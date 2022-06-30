<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeguroX</title>
    <link rel="shorcut icon" href="./img/favicon.png">
    <!--Hoja de estilos------------>
    <link rel="stylesheet" href="/css/home.css">
     
</head>
<body>
    @csrf
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Seguro-X</h1>
			</div>
			<nav class="menu">

				<a href="#">Inicio</a>
				</li>
				<li><a href="#">Cotizar seguros</a>
					<ul class="submenu">
						<li class="itemlist"><a href="#">Autos</a></li>
						<li class="itemlist"><a href="#">Motos</a></li>
						<li class="itemlist"><a href="#">Personas</a></li>
					</ul>
				</li>
                <!-- lista desplegable menú de usuario -->
				<li><a href="#"id="user" name="user">{{ Auth::user()->name }}</a>
					<ul class="submenu">
                    <li class="itemlist">
                        <a class="button-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar sesión') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </li>
				<!-------  end menú de usuario  -------->


			<!-- <li class="itemlist"><a href="#">Servicio #3</a></li> --->
					</ul>
				</li>
              
                </div>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Portafolio</a>
			<a href="#">Servicios</a>
			<a href="#">Suscribirse</a>
			<a href="#">Facebook</a>
			<a href="#">Youtube</a>
			<a href="#">Instagram</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
<!--	--------------->

 <div class="card-body">
	@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif

	{{ __('Iniciaste sesión') }}
</div>

</div>
</body>
</html>
