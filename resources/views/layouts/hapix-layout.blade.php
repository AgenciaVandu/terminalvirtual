<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¡Agilizamos la cobranza de tu negocio! - Hapix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="{{ asset('css/hapix.css') }}">
    @stack('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    @livewireStyles
    @include('sweetalert::alert')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light hapix-nav  fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/img/hapix-logo.svg') }}" width="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link anek-400" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anek-400" href="#soluciones">Soluciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link anek-400" href="#integraciones">Integraciones</a>
                </li>
                <div class="nav-item ">
                    <a href="https://www.facebook.com/hapix.mx" class="nav-link" target="blank_" >
                        <i class="fab fa-instagram pr-3"></i>
                    </a>
                </div>
                </ul>
                
            </div> 
        </div>
    </nav>  
    @yield('contenido')
    <div class="pagar-ahora fixed-bottom">
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col-12">
                    <p class="anek-400">Si ya eres cliente Hapix <a class="anek-600"  href="/login">haz clic aquí e inicia sesión</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="/js/carrusel.js"></script>
    <script src="https://js.stripe.com/v3/"></script>

    @stack('scripts')

    @livewireScripts
    
</body>

</html>
