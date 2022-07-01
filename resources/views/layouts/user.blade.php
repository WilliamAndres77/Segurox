<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--         ----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeguroX</title>
	<!-- Favicon  -->
    <link rel="shorcut icon" href="./img/favicon.png">
    <!--Hoja de estilos------------>
    <link href="{{ asset('/css/user.css') }}" rel="stylesheet">
     
</head>
<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1>Seguro-X</h1>
			</div>
			<nav class="menu">

				<a href="{{ url('/') }}">Inicio</a>

				<li><a href="#">Cotizar seguros</a>

					<!----- lista desplegable cotizar ----->
					<ul class="submenu">
						<li class="itemlist"><a>
                            <form action="" method="post">
                                <h4 class="titulocotizar">Tipo de Seguro</h4>
                                <select name="vehiculo" id="vehiculo">
                                    <option value="moto">Moto</option>
                                    <option value="carro">Carro</option>
                                    <option value="avioneta">Personas</option>
                                </select> <br><br>
                                <h4 class="titulocotizar">Valor del Seguro</h4>
                                <input type="number" class="inputvalor" placeholder="$">
                            </form>
                            <button type="submit" class="botoncotizar">Cotizar</button>
                        </a></li>
					</ul>
					<!------- End lista desplegable ------->
				</li>

				<li><a href="#"id="user" name="user" style="background-color:rgba(151, 117, 90, 0.866)">{{ Auth::user()->name }}</a>
					<!---- lista desplegable menú de usuario --->
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
					</ul>
					<!--------  end menú de usuario  -------->
				</li>
		  
                </div>
			</nav>
		</div>
	</header>
				<div class="capa"></div>
					<!---- Barra lateral ------>
					<input type="checkbox" id="btn-menu">
					<div class="container-menu">
						<div class="cont-menu">
							<nav>
								<a href="#">Portafolio</a>
								<a href="#">Servicios</a>
								<a href="#">Cotización</a>
								<a href="#">Nuestras oficinas</a>
								<a href="#">Atención al cliente</a>
								<a href="#">PQRS</a>
							</nav>
							<label for="btn-menu">✖️</label>
						</div>
					<!--end Barra lateral ---->


</body>
</html>