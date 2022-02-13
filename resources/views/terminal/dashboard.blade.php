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
        <div class="container pb-3">
            <div class="datos">
                <li class="source-semibold">
                    Empresa: <span class="source-regular"></span>
                </li>
                <li class="source-semibold">
                    Razón social: <span class="source-regular"></span>
                </li>
                <li class="source-semibold">
                    RFC: <span class="source-regular"></span>
                </li>
            </div>
        </div>
    </header>
   <section id="ordenes">
       <div class="container">
           <div class="card mb-3"> {{-- titulo de orden de compra --}}
               <div class="row pt-3 pb-4">
                   <div class="col-lg-8 m-auto">
                       <h5 class="source-semibold text-center">
                        OC: <span  style="color: gray">OC-ADDONKF-ALIANZAMEX-TRANSPORTES YOYO-21012022</span>
                       </h5>
                   </div>
                   <div class="col-lg-4 text-center source-bold">
                        <a href="/bill" class="btn btn-primary source-bold">Ver detalle</a>
                   </div>
               </div>
           </div>
           <div class="card mb-3"> {{-- titulo de orden de compra --}}
                <div class="row pt-3 pb-4">
                    <div class="col-lg-8 m-auto">
                        <h5 class="source-semibold text-center">
                        OC: <span  style="color: gray">OC-ADDONKF-ALIANZAMEX-TRANSPORTES YOYO-21012022</span>
                        </h5>
                    </div>
                    <div class="col-lg-4 text-center source-bold">
                        <a href="/bill" class="btn btn-primary source-bold">Ver detalle</a>
                    </div>
                </div>
            </div>
       </div>
   </section>

@endsection
