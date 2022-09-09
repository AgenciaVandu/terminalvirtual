@extends('layouts.hapix-user')
@section('contenido')
    @push('css')
        <style>
            #checkout-f {
                padding-top: 50px
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
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}
    <!-- Modal -->
    <div class="modal fade" id="cambiar-password" tabindex="-1" aria-labelledby="cambiar-password" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cambiar-password-label">Actualizar contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="source-regular text-muted">
                        Asegúrese que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.
                    </p>
                    <form method="POST" action="{{ route('user.update.password') }}" class="text-left">
                        @csrf
                        <div class="form-group">
                            <label for="cambiar-pswd">Contraseña actual</label>
                            <input type="password" class="form-control" id="cambiar-pswd" name="current_password">
                            <small class="text-muted">Contraseña asignada por Kananfleet</small>
                        </div>
                        <div class="form-group">
                            <label for="pswd-nuevo">Contraseña nueva</label>
                            <input type="password" class="form-control" id="pswd-nuevo" name="password">
                            <small class="text-muted">Sugerencia: Utilice caracteres especiales</small>
                        </div>
                        <div class="form-group">
                            <label for="confirmar-pswd">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="confirmar-pswd" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Cambiar contraseña</button>
                    </form>
                </div>
                {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
            </div>
        </div>
    </div>
    <header>
        <div class="hapix-cuerpo">
        <div class="container-fluid pb-3">
            <div class="hapix-fluid">
            <div class="row pt-5 pb-3 ">
                <div class="col-lg-5 hapix__datos">
                    <h2 class="anek-600 pb-3">Información del cliente</h2>
                    <li class="anek-400">
                        Nombre: <br>
                        <p class="hapix-bg" >Alvar David Buenfil Vadillo</p>
                    </li>
                    <li class="anek-400">
                        RFC: <br> <p class="hapix-bg">{{ auth()->user()->RFC }}</p>
                    </li>
                    <li class="anek-400">
                        Teléfono: <br>
                        <p class="hapix-bg" >999 389 3710</p>
                    </li>
                    <li class="anek-400">
                        Dirección: <br>
                        <p class="hapix-bg" >Calle 15h x 8 y 8a Vergel 3 CP 97173</p>
                    </li>
                    <li class="anek-400">
                        Email: <br>
                        <p class="hapix-bg" >ab@agenciavandu.com</p>
                    </li>
                    <li class="anek-400">
                        Empresa: <br>
                        <p class="hapix-bg" >{{ auth()->user()->company_name }}</p>
                    </li>
                    <li class="anek-400">
                        Razón social: <br> <p class="hapix-bg">{{ auth()->user()->bussiness_name }}</p>
                    </li>
                    <li class="anek-300">
                    <small>Puede solicitar el cambio de sus datos de contacto al correo soporte@hapix.com</small>
                    </li>
                    <button type="button" class="btn btn-light btn-sm mt-2 mb-2" data-toggle="modal" data-target="#cambiar-password">Cambiar contraseña</button>
                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="" class="btn btn-outline-dark btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                    </form>
                </div>
                 <div class="col-lg-7 text-left ">
                 <h2 class="anek-600 pb-3" style="color: #424242;">Órdenes de compra</h2>
                 @foreach ($orders as $order)
                    <div class="card mt-3"> {{-- titulo de orden de compra --}}
                        <div class="row hapix-espacio">
                            <div class="col-lg-8">
                                <li><small style="color:gray;">08 de septiembre 2022</small></li>
                                <li class="anek-500">{{ $order->contract }}</li>
                                <li>Total: </li>
                            </div>
                            <div class="col-lg-4 anek-600 m-auto">
                                <div class="text-center">
                                <a href="{{ route('terminal.order', $order) }}" class="btn btn-primary btn-block anek-600">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col mt-3 text-center">
                        
                       
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>
   <!--  <section id="ordenes">
        <div class="container">
            @foreach ($orders as $order)
                <div class="card mb-3"> {{-- titulo de orden de compra --}}
                    <div class="row pt-3 pb-4">
                        <div class="col-lg-8 m-auto">
                            <h5 class="source-semibold text-center">
                                OC: <span style="color: gray">{{ $order->contract }}</span>
                            </h5>
                        </div>
                        <div class="col-lg-4 text-center source-bold">
                            <a href="{{ route('terminal.order', $order) }}" class="btn btn-primary source-bold">Ver
                                detalle</a>
                        </div>
                    </div>
                </div>
            @endforeach
           <div class="card mb-3"> 
            <div class="row pt-3 pb-4">
                    <div class="col-lg-8 m-auto">
                        <h5 class="source-semibold text-center">
                            OC: <span style="color: gray">OC-ADDONKF-ALIANZAMEX-TRANSPORTES YOYO-21012022</span>
                        </h5>
                    </div>
                    <div class="col-lg-4 text-center source-bold">
                        <a href="/bill" class="btn btn-primary source-bold">Ver detalle</a>
                    </div>
                </div>
        </div>
        </div>
        <div class="col m-auto text-center">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="" class="btn btn-outline-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">Cerrar sesión</a>
            </form>
            <button type="button" class="btn btn-light btn-sm mt-2" data-toggle="modal"
                        data-target="#cambiar-password">Cambiar contraseña</button>
        </div>
    </section> -->
@endsection
