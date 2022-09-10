@extends('layouts.hapix-layout')
@section('contenido')
    @if ($header->image)
        <a href="{{ $header->image->link }}">
            <header id="b-index" style="background-image: url({{ Storage::url($header->image->url) }}); background-repeat: no-repeat; background-position: center; background-size: cover;
                    min-height: 100vh;">
                
            </header>
        </a>
    @else
        <header id="b-index" style="background-image: url(/img/banners/1-index.png); background-repeat: no-repeat; background-position: center; background-size: cover;
                    min-height: 100vh;">
            <div class="container">
                <div class="cabecera-titular">
                    <h1 class="source-bold">
                        Administre sus activos <br class="d-none d-sm-none d-md-none d-lg-block"> en un sólo lugar
                    </h1>
                    <a href="/contacto" class="btn btn-outline-light source-black">
                        SOLICITAR DEMO
                    </a>
                </div>
            </div>
        </header>
    @endif
@endsection
