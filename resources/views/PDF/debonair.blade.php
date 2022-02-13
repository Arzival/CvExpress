<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/pdfStyles.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
    <title>CV Express PDF {{ $cv->nombre }}</title>
</head>

<body>
    <div class="name-cv">
        <h3>{{ $cv->nombre }} {{ $cv->apellidos }}</h3>
    </div>
    <div class="marco-sup">
        <div class="marco">
            <img class="foto-cv" src="{{ asset('storage/foto/' . $cv->file) }}" alt="">
        </div>
    </div>
    <div class="marco-left">
        <h3 class="aptitudes color2">
            Aptitudes:
        </h3>
        <h4 class="aptitudes-cv color3">{{ $cv->aptitud1 ? $cv->aptitud1 . ', ' : '' }}{{ $cv->aptitud2 ? $cv->aptitud2 . ', ' : ''}}{{ $cv->aptitud3 ? $cv->aptitud3 . ', ' : ''}}{{ $cv->aptitud4 ? $cv->aptitud4 . ', ' : ''}}{{ $cv->aptitud5 ? $cv->aptitud5 . '.' : ''}}</h4>
    </div>
</body>

</html>
