<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
        crossorigin="anonymous">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @yield('styles')
        <link rel="shortcut icon" href="{{ asset('img/icono.png') }}" type="image/x-icon">
    <title>CV Express</title>
</head>

<body>
          <div class="col-md-12 col-md-8 col-md-5">
                    @yield('contenido')
          </div>
          <script src="{{ asset('js/scripts.js') }}"></script>
          <script src="{{ asset('js/app.js') }}" ></script>
</body>
<footer
    class="page-footer footer">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-12">
                <h5 class="text-uppercase">CV Express</h5>
                <p>
                    Proyecto creado por <a class="link-footer" target="_blanc" href="https://arzivall.com">Armando Reyes</a> usando Laravel, Bootstrap y ♥.
                </p>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a class="link-footer" target="_blanc" href="https://arzivall.com"> Arzivall</a>
    </div>
</footer>


</html>
