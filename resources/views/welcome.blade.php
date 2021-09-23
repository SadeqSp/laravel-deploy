<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel-deploy</title>
    </head>
    <body class="antialiased">
        {{ $post-> name }}
        <br>
        {{ $post->age }}
    
    </body>
</html>
