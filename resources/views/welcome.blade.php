<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Seguro-X</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="shorcut icon" href="./img/favicon.png">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        
        <div id="main-container">
            <header>
                <div id="menu">
                    <ul>
                        <li id="logo"><a href="#"><img src="img/logo.png" width="290px"></a></li>
                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"">Registrarse</a></li>
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Inicia sesión</a></li>
                
                    </ul>
                </div> 
    
                <main>
                    <div class="text">
                        <h1 id="title" name="title">Te aseguramos!</h1>
                        <p id="text" name="text">
                            Conoce la mejor forma de garantizar tu bienestar                             
                        </p>
                        <img src="./img/asesor.jpg" width="600rem" id="banner">
                    </div>
    
                    <div class="image">
                        <img src="./img/phone.png" width="450"/>
                    </div>
                </main>
            </header>
            
            <div class="section" id="features">
                <div class="layout layout-left">
                    <div class="text">
                        <h3>Funcionalidades que de verdad sirven</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cum soluta ea rem? Culpa reprehenderit natus maxime iste, assumenda rerum illum cumque similique voluptatum nostrum consequatur, accusantium qui, dolorum architecto.</p>
                    </div>
                    <div class="image">
                        <img src="./img/draw.png" width="600rem">
                    </div>
                </div>  
                
                <div class="layout layout-right">
                    
                    <div class="image">
                        <img src="./img/mobile_screen.png" width="400rem">
                    </div>
                    <div class="text">
                        <h3>Configuración super fácil!</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro cum soluta ea rem? Culpa reprehenderit natus maxime iste</p>
                    </div>
                    
                </div>
            </div>
    </div>
        <footer>
            SB Segurox project© Derechos Reservados
        </footer>
     </div>
    </body>
</html>