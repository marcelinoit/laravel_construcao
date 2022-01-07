<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Em Manutenção</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('images/maintenance.png') }}" style="width: 350px; height: 350px" alt="Maintenance Image" class="maintenance-image">
        </div>
        <h1 class="text-center title">SITE EM CONSTRUÇÃO</h1>
        <div class="text-center subtitle">Estamos trabalhando muito para lhe dar a melhor experiência.</div>
    </div>
</body>
</html>