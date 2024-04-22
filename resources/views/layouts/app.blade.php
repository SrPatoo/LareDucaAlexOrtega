<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-image: url('{{ asset("images/fondo.jpg") }}'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Cubre todo el fondo */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            min-height: 100vh; /* Altura mínima del cuerpo igual a la altura de la ventana */
            position: relative; /* Para que el footer esté posicionado correctamente */
        }

        #app {
            padding-bottom: 6rem; /* Añade espacio al final para el footer */
        }

        footer {
            position: absolute; /* Fija el footer en la parte inferior */
            left: 0;
            bottom: 0;
            width: 100%; /* Ancho completo */
            background-color: rgb(229 229 229);
            color: black; /* Cambia el color del texto */
            text-align: center; /* Centra el texto */
            padding: 4rem 0; /* Añade relleno */
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('custom_styles')
        @yield('header') <!-- Nuevo bloque para el encabezado -->
        
        <main>
            @yield('content')
        </main>

        <footer>
            <span class="text-2xl font-bold">Patusic</span>
            <span class="text-xl"> - Juegos educativos</span>
        </footer>
    </div>
</body>
</html>
