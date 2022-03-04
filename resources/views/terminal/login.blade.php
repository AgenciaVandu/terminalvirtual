@extends('layouts.kanan-login')
@section('contenido')
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98 ;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link rel="stylesheet" href="{{asset('/css/signin.css')}}">
@endpush
<form class="form-signin">
    <div class="text-center">
        <img class=" mb-4" src="{{asset('/img/kanan-green.svg')}}" width="220" alt="">
    </div>
    <h4 class="text-center mb-3 source-bold">Bienvenido a portal de pagos Kananfleet®</h1>
    <label for="inputEmail" class="sr-only">Referencia</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Escriba su referencia" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button href="/bill" class="btn btn-lg source-bold btn-primary btn-block" type="submit">Comenzar</button>
    <p class="text-center source-light mt-5 mb-3 text-muted">Todos los derechos reservados <br> Kananfleet® &copy;2022</p>
  </form>
@endsection
