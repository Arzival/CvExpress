<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/pdfStyles.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
    <title>CV Express PDF</title>
</head>

<body>
<h1 class="name-cv color1">{{ $cv->nombre }} {{ $cv->apellidos }}</h1>
<img class="foto-cv" src="{{ asset('storage/foto/'.$cv->file) }}" alt="">
</body>
</html>
