<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrador</title>
    <link rel="shorcut icon" href="./img/favicon.png">
    <!--Hoja de estilos------------>
    <link rel="stylesheet" href="/css/menu-admin.css">
     
</head>
<body>
    @csrf
    <main class="py-4">
        @yield('content')
    </main>
	<header>
        
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
			<a href="#">Usuarios</a>
			<a href="#">Estadisticas</a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
<!--	--------------->


<div class="tabla-content">
    <table>
        <h2>
            <ul class="listatitulotabla">
                <li class="idhead">id</li>
                <li class="nombrehead">nombre</li>
                <li class="rolhead">rol</li>
                <li class="edadhead">edad</li>
                <li class="fechahead">fecharegistro</li>
            </ul>
        </h2>
        <tbody>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
                <td>sub titulo</td>
            </tr>
        </tbody>
    </table>
</div>

</div>

</body>
</html>