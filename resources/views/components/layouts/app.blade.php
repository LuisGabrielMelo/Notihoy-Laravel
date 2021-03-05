<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fuentes -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <!-- Estilos -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        @stack('css') <!-- El stack lo utilizamos para inyectar código fuera del contexto donde nos encontremos mediante un push -->
        
    </head>
    <body class="font-sans antialiased" >
     
        <main class="min-h-screen bg-gray-200">
          

            <!-- Aquí podrías poner una barra de navegación o algo así-->
            
            <!-- Contenido-->
            
                {{ $slot }} <!-- Esta es una de las magias de laravel, aquí irá todo lo que pongas dentro del extends -->
            
             <!-- @ include('layouts.footer') esto sería la sintaxis para introducir un archivo blade, para mejorar el templating -->
            
        </main>
        @stack('js') <!-- El stack lo utilizamos para inyectar código fuera del contexto donde nos encontremos mediante un push -->
    </body>
</html>
