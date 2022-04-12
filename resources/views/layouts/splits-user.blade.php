<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Splits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="{{ asset('css/splits.css') }}">
    @stack('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="https://js.openpay.mx/openpay.v1.min.js"></script>
    <script type='text/javascript' src="https://js.openpay.mx/openpay-data.v1.min.js"></script> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    @livewireStyles
    @include('sweetalert::alert')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-splits fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/img/splits-logo.svg') }}" width="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active anek-400">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item anek-400">
                        <a class="nav-link" href="/soluciones">Soluciones</a>
                    </li>
                </ul>
                {{-- <div class="form-inline my-2 my-lg-0">
                    <a href="/contacto" class="btn btn-secondary btn-sm source-semibold">SOLICITAR DEMO</a>
                </div> --}}
            </div>
        </div>
    </nav>
    
    @yield('contenido')

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        })
    </script>
    <script src="https://js.stripe.com/v3/"></script>

    @stack('scripts')

    @livewireScripts
    
</body>

</html>