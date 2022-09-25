@extends('layouts.hapix-user')
@section('contenido')
    @push('css')
        <style>
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
    <header>
        <div class="hapix-cuerpo">
            <div class="container-fluid pb-3">
                <div class="hapix-fluid">
                    <div class="row pt-5 pb-3 ">
                        <div class="col-lg-5 hapix__datos">
                            <h2 class="anek-600 pb-3">Información del cliente</h2>
                            <li class="anek-400">
                                Nombre: <br>
                                <p class="hapix-bg">{{ auth()->user()->name }}</p>
                            </li>
                            <li class="anek-400">
                                RFC: <br>
                                <p class="hapix-bg">{{ auth()->user()->RFC }}</p>
                            </li>
                            <li class="anek-400">
                                Teléfono: <br>
                                <p class="hapix-bg">{{ auth()->user()->phone }}</p>
                            </li>
                            <li class="anek-400">
                                Dirección: <br>
                                <p class="hapix-bg">{{ auth()->user()->address }}</p>
                            </li>
                            <li class="anek-400">
                                Email: <br>
                                <p class="hapix-bg">{{ auth()->user()->email }}</p>
                            </li>
                            <li class="anek-400">
                                Empresa: <br>
                                <p class="hapix-bg">{{ auth()->user()->company_name }}</p>
                            </li>
                            <li class="anek-400">
                                Razón social: <br>
                                <p class="hapix-bg">{{ auth()->user()->bussiness_name }}</p>
                            </li>
                            <li class="anek-300">
                                <small>Puede solicitar el cambio de sus datos de contacto al correo
                                    soporte@hapix.com</small>
                            </li>
                            <button type="button" class="btn btn-light btn-sm mt-2 mb-2" data-toggle="modal"
                                data-target="#cambiar-password">Cambiar contraseña</button>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="" class="btn btn-outline-dark btn-sm" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Cerrar sesión</a>
                            </form>
                        </div>
                        <div class="col-lg-7 text-left">
                            <h2 class="h2-hapix anek-600 pb-3">Órdenes de compra</h2>
                            <table class="table table-striped table-hover table-borderless" style="background-color: #fff; border-radius: .4em;">
                                <thead>
                                    <tr>
                                        <th scope="col" class="anek-500 text-left">#</th>
                                        <th scope="col" class="anek-500 text-left">DESCRIPCIÓN</th>
                                        <th scope="col" class="anek-500 text-center">TOTAL</th>
                                        <th scope="col" class="anek-500 text-center">PAGAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form action="{{ route('terminal.checkout') }}" method="POST">
                                        @csrf
                                        @foreach ($splits as $split)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td class="anek-400">{{ $split->description }}</td>
                                                <td class="anek-400 text-center">
                                                    ${{ $split->amount }}
                                                </td>
                                                <td class="text-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $split->id }}" name="splits[]">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            @error('splits')
                                <div class="alert alert-danger text-center">Seleccione una partida para continuar</div>
                            @enderror
                            <div class="boton-pagar">
                                {{-- <a href="{{ route('terminal.checkout', $reference) }}" class="btn btn-primary btn-block">Pagar conceptos</a> --}}
                                <input type="hidden" name="order" value="{{ $order }}">
                                <button type="submit" class="anek-500 btn btn-primary btn-block">Pagar conceptos</button>
                                <div class="text-center mt-2">
                                    <a class="anek-400" style="color: #011E13; text-decoration:none;"
                                        href="javascript:history.back()">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
