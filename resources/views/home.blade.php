<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
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
				<a href="#">Nosotros</a>
				<a href="#">Contacto</a>
                <a href="#" style="background-color: #6d6e70">
                     Bienvenido(a)  {{ Auth::user()->name }}
                </a>
                <a class="button-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }} 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
                </form> 
                </a> 
                </p>
                 {{--  
                <!--Usuario y dropdown cerrar sesión--->
                <a href="#" style="background-color: #6d6e70">
                    
                    <ul>
                        <li>
                            
                        </li>
                    </ul>
                </a>
                --}}
               
                
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
			<a href="#">Cotización</a>
			<a href="#">Nuestras oficinas</a>
			<a href="#">Atención al cliente</a>
			<a href="#">PQRS</a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
<!--	--------------->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Pagina principal') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('Iniciaste sesión') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
