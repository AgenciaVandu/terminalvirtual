@extends('layouts.hapix-layout')
@section('contenido')
    @if ($header->image)
        <a href="{{ $header->image->link }}">
            <header id="b-index" style="background-image: url({{ Storage::url($header->image->url) }}); background-repeat: no-repeat; background-position: center; background-size: cover;
                    min-height: 100vh;">
                
            </header>
        </a>
    @else
        <header id="b-index" style="background-image: url(/img/bg1.svg); background-repeat: no-repeat; background-position: center; background-size: cover; min-height:400px;">
            <div class="container">
            <div class="cabecera" >
                   <div class="cabecera__titular text-center">
                        <h1 class="anek-700">Tu negocio merece <br class="d-none d-sm-none d-md-block d-lg-block"> hacerse <span class="blue-hapix">grande</span></h1>
                        <h4 class="anek-400">Infraestructura para procesos de cobranza y recuperación de cartera.</h4>
                        <a class="btn btn-dark anek-500">Solicita demo gratuita</a>
                   </div>
                </div>
            </div>
            </div>
        </header>
    @endif
    <div class="plataforma">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 plataforma__info m-auto">
                    <h2 class="anek-700">Una plataforma que simplifica <br class="d-none d-sm-none d-md-none d-lg-block"> tus procesos de cobranza</h2>
                    <p class="anek-300">Reunimos todo lo necesario para desarrollar un sistema capaz de aceptar pagos en línea de clientes en todo el mundo, automatizar recordatorios de pago. <span style="color: #0028B4;"> Nuestras herramientas impulsan a minoristas que operan en internet y en persona.</span></p>
                    <p class="anek-300">Nuestro módulo de control está orientado a que conozcas en tiempo real el estatus de pago de tu cartera de clientes.</p>
                    <a class="btn btn-dark anek-500">Solicita demo gratuita</a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <figure>
                        <img src="{{asset('/img/login-1.png')}}" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="soluciones">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 soluciones__info m-auto">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('/img/icon/vector.svg')}}" width="29" alt="">
                            <h5 class="anek-700">Hosting y dominio</h5>
                            <p class="anek-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum blanditiis voluptatibus.</p>
                        </div>
                        <div class="col-6">
                            <img src="{{asset('/img/icon/vector-1.svg')}}" width="30" alt="">
                            <h5 class="anek-700">Cobros en línea</h5>
                            <p class="anek-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum blanditiis voluptatibus.</p>
                        </div>
                        <div class="col-6">
                            <img src="{{asset('/img/icon/vector-2.svg')}}" width="30" alt="">
                            <h5 class="anek-700">Reportes globales</h5>
                            <p class="anek-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum blanditiis voluptatibus.</p>
                        </div>
                        <div class="col-6">
                            <img src="{{asset('/img/icon/vector-3.svg')}}" width="29" alt="">
                            <h5 class="anek-700">Sitio web individual</h5>
                            <p class="anek-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nostrum blanditiis voluptatibus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
