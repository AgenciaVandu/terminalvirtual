@extends('layouts.kanan-login')
@section('contenido')
@push('css')
<style>
    .bg-kanan {
        background-color: #004c98 ;
    }
    #checkout-f {
        padding-top: 50px
    }

    .bill {
        padding-top: 3em;
    }
    .card {
        padding: 1em;
        border-radius: .8em;
        box-shadow: 0px 2px 5px 1px rgba(154, 154, 154, 0.2);
        border: none;
    }
    .btn-outline-dark:hover {
        color: #fff;
    }
</style>
@endpush
 <header id="gracias" class="bill">
    <div class="agradecimiento text-center ">
        <img src="{{('/img/error.png')}}" class="img-fluid" alt="">
        <h1 class="source-bold">¡Error de pago!</h1>
        <p class="source-regular">Algo sucedió, por favor vuelva a intentarlo <br> En caso de que el error persista por favor envíe un correo a <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a> para notificar lo sucedido</p>
        <a href="{{ route('terminal.index') }}" class="btn btn-outline-dark source-bold">Ir a mis cuentas</a>
    </div>
 </header>

@endsection
