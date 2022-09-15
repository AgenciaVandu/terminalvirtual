@extends('layouts.hapix-layout')
@section('contenido')
    @if ($header->image)
        <a href="{{ $header->image->link }}">
            <header id="b-index" style="background-image: url({{ Storage::url($header->image->url) }}); background-repeat: no-repeat; background-position: center; background-size: cover;
                    min-height: 100vh;">
                
            </header>
        </a>
    @else
        <header id="b-index" style="background-image: url(/img/bg1.svg); background-repeat: no-repeat; background-position: center; background-size: cover; min-height:100vh;">
            <div class="container">
            <div class="cabecera" >
                   <div class="cabecera__titular text-center">
                        <figure>
                            <img src="{{asset('/img/hapix-logo.svg')}}" width="170">
                        </figure>
                        <h1 class="anek-700">Tu negocio merece <br class="d-none d-sm-none d-md-block d-lg-block"> hacerse <span class="blue-hapix">grande</span></h1>
                        <h4 class="anek-400">Infraestructura para procesos de cobranza y recuperación de cartera.</h4>
                        <button class="btn btn-dark anek-500">Solicita demo gratuita</button>
                   </div>
                </div>
            </div>
            </div>
        </header>
    @endif
@endsection
