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
 <header class="bill">
    <div class=" pt-5 pb-3 text-center">
        <h2 class="source-bold">Terminal de pago Virtual</h2>
    </div>
    <div class="container pb-3">
        <div class="datos">
            <li class="source-semibold">
                Empresa: <span class="source-regular">Transporte YOYO</span>
             </li>
             <li class="source-semibold">
                Razón social: <span class="source-regular">Transporte YOYO DE MÉXICO SA DE CV</span>
             </li>
             <li class="source-semibold">
                RFC: <span class="source-regular">TYO021123KN9</span>
             </li>
        </div>
    </div>
 </header>
 <section class="info-bill">
     <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12" style="background-color: #fbfcfc">
                <h4 class="source-bold text-center pt-3 pb-2">
                    Referencias pendientes
                </h4>
                <div class="bill-content p-2">
                    <div class="card mb-3"> <!--Card de referencia pendiente-->
                        <h5 class="source-semibold">
                            Referencia: <span class="source-light">321722-a</span>
                        </h4>
                        <p class="source-regular" style="">
                            Segundo pago del motor de sincronización; licenciamiento vitalicio; servicio de implementación y poliza de mantenimiento anual.
                        </p>
                        <div class="total-card mb-2">
                            <li class="source-semibold">
                                <div class="row">
                                    <div class="col-6">
                                        TOTAL:
                                    </div>
                                    <div class="col-6 text-right">
                                        $6,000 <span>USD</span>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <a href="/checkout" class="btn btn-primary source-semibold">Pagar referencia</a>
                    </div>
                    <div class="card mb-3"> <!--Card de referencia pendiente-->
                        <h5 class="source-semibold">
                            Referencia: <span class="source-light">321722-a</span>
                        </h4>
                        <p class="source-regular" style="">
                            Segundo pago del motor de sincronización; licenciamiento vitalicio; servicio de implementación y poliza de mantenimiento anual.
                        </p>
                        <div class="total-card mb-2">
                            <li class="source-semibold">
                                <div class="row">
                                    <div class="col-6">
                                        TOTAL:
                                    </div>
                                    <div class="col-6 text-right">
                                        $6,000 <span>USD</span>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <a href="/checkout" class="btn btn-primary source-semibold">Pagar referencia</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h4 class="source-bold text-center pt-3 pb-2">
                    Referencias pagadas
                </h4>
                <div class="bill-content p-2" >
                    <div class="bill-pagado">
                        <div class="card mb-3"> <!--Card de referencia pagada-->
                            <h5 class="source-semibold">
                                Referencia: <span class="source-light">321722-a</span>
                            </h4>
                            <p class="source-regular" style="">
                                Segundo pago del motor de sincronización; licenciamiento vitalicio; servicio de implementación y poliza de mantenimiento anual.
                            </p>
                            <div class="total-card mb-2">
                                <li class="source-semibold">
                                    <div class="row">
                                        <div class="col-6">
                                            TOTAL:
                                        </div>
                                        <div class="col-6 text-right">
                                            $6,000 <span>USD</span>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"  style="background-color: #fbfcfc">
                <h4 class="source-bold text-center pt-3 pb-2">
                    Descargar archivos
                </h4>
                <div class="bill-content p-2">
                    <div class="card">
                        <h5 class="source-semibold">
                            Contrato de servicio
                        </h5>
                        <p class="source-regular" style="color: gray;">
                            Primer pago de servicio Kananfleet®
                        </p>
                        <a href="" class="btn btn-outline-dark source-semibold">Descargar archivo</a>
                    </div>
                </div>
            </div>
         </div>
         <p class="pt-4 source-regular text-center">Recuerde comprobar que todos los datos incluidos son correctos, en caso contrario comuniquese al <br class="d-block d-sm-block d-md-none d-lg-none">
            <span class="source-regular" style="color: gray;">
                <a href="tel:5219999306745" style="color: gray;">+52 1 999 930 6745</a>
            </span> <br class="d-none d-sm-none d-md-block d-lg-block"> o por correo electrónico a <span class="source-regular" style="color: gray; ">
                <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a>
            </span> para solicitar ajustes.
          </p>
     </div>
 </section>

@endsection
