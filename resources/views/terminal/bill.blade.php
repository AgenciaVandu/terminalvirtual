@extends('layouts.kanan-login')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
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
    <header class="bill">
        <div class=" pt-5 pb-3 text-center">
            <h2 class="source-bold">Terminal de pago Virtual</h2>
        </div>
        <div class="container-fluid pl-4 pb-3">
            <div class="datos">
                <li class="source-semibold">
                    Empresa: <span class="source-regular">{{ auth()->user()->company_name }}</span>
                </li>
                <li class="source-semibold">
                    Razón social: <span class="source-regular">{{ auth()->user()->bussiness_name }}</span>
                </li>
                <li class="source-semibold">
                    RFC: <span class="source-regular">{{ auth()->user()->RFC }}</span>
                </li>
            </div>
        </div>
    </header>
    <section id="info-bill">
        <div class="container-fluid">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" class="source-bold text-center">#</th>
                            <th scope="col" class="source-bold text-center">DESCRIPCIÓN</th>
                            <th scope="col" class="source-bold text-center">TOTAL</th>
                            <th scope="col" class="source-bold text-center">PAGAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="source-regular">Primer pago del motor de sincronización; licenciamiento vitalicio;
                                sevicio de implementación y póliza de mantenimiento anual.</td>
                            <td class="source-regular text-center">
                                $8,108.61 <br> <small class="source-regular" style="font-size: .65rem;">Importe en
                                    USD</small>
                            </td>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pagar">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td class="source-regular">Segundo pago del motor de sincronización; licenciamiento vitalicio;
                                sevicio de implementación y póliza de mantenimiento anual.</td>
                            <td class="source-regular text-center">
                                $3,179.66 <br> <small class="source-regular" style="font-size: .65rem;">Importe en
                                    USD</small>
                            </td>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pagar">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td class="source-regular">Tercer pago del motor de sincronización; licenciamiento vitalicio;
                                sevicio de implementación y póliza de mantenimiento anual.</td>
                            <td class="source-regular text-center">
                                $3,020.74 <br> <small class="source-regular" style="font-size: .65rem;">Importe en
                                    USD</small>
                            </td>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pagar">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td class="source-regular">Póliza de mantenimiento anual 2022</td>
                            <td class="source-regular text-center">
                                $1,947.41 <br> <small class="source-regular" style="font-size: .65rem;">Importe en
                                    USD</small>
                            </td>
                            <td class="text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="pagar">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class="boton-pagar">
                <a href="/checkout{{-- {{ route('terminal.checkout', $reference) }} --}}" class="btn btn-primary btn-block">Pagar conceptos</a>
            </div>
        </div>
    </section>
    {{-- <section class="info-bill">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12" style="background-color: #fbfcfc">
                    <h4 class="source-bold text-center pt-3 pb-2">
                        Referencias pendientes
                    </h4>
                    <div class="bill-content p-2">
                        @foreach ($references_pend as $reference)
                            <div class="card mb-3">
                                <!--Card de referencia pendiente-->
                                <h5 class="source-semibold">
                                    Referencia: <span class="source-light">{{ $reference->reference }}</span>
                                    </h4>
                                    <p class="source-regular" style="">
                                        {{ $reference->description }}
                                    </p>
                                    <div class="total-card mb-2">
                                        <li class="source-semibold">
                                            <div class="row">
                                                <div class="col-6">
                                                    TOTAL:
                                                </div>
                                                <div class="col-6 text-right">
                                                    ${{ number_format($reference->amount, 2) }} <span>USD</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>

                                    <a href="{{ route('terminal.checkout', $reference) }}"
                                        class="btn btn-primary source-semibold">Pagar referencia</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="source-bold text-center pt-3 pb-2">
                        Referencias pagadas
                    </h4>
                    <div class="bill-content p-2">
                        <div class="bill-pagado">
                            @foreach ($references_pay as $reference)
                                <div class="card mb-3">
                                    <!--Card de referencia pagada-->
                                    <h5 class="source-semibold">
                                        Referencia: <span class="source-light">{{ $reference->reference }}</span>
                                        </h4>
                                        <p class="source-regular" style="">
                                            {{ $reference->description }}
                                        </p>
                                        <div class="total-card mb-2">
                                            <li class="source-semibold">
                                                <div class="row">
                                                    <div class="col-6">
                                                        TOTAL:
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        ${{ number_format($reference->amount, 2) }} <span>USD</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12" style="background-color: #fbfcfc">
                    <h4 class="source-bold text-center pt-3 pb-2">
                        Descargar archivos
                    </h4>
                    <div class="bill-content p-2">
                        @foreach ($references_pay as $reference)
                            @if ($reference->document)
                                <div class="card">
                                    <h5 class="source-semibold">
                                        Contrato de servicio
                                    </h5>
                                    <p class="source-regular" style="color: gray;">
                                        {{ $reference->description }}
                                    </p>
                                    <a href="{{ Storage::url($reference->document->url) }}" target="_blank"
                                        class="btn btn-outline-dark source-semibold">Descargar archivo</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <secion>
        <div class="container">
            <p class="pt-4 source-regular text-center">Recuerde comprobar que todos los datos incluidos son correctos, en
                caso contrario comuniquese al <br class="d-block d-sm-block d-md-none d-lg-none">
                <span class="source-regular" style="color: gray;">
                    <a href="tel:5219999306745" style="color: gray;">+52 1 999 930 6745</a>
                </span> <br class="d-none d-sm-none d-md-block d-lg-block"> o por correo electrónico a <span
                    class="source-regular" style="color: gray; ">
                    <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a>
                </span> para solicitar ajustes.
            </p>
        </div>
    </secion>

@endsection
