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

            .card {
                border-radius: 1em;
            }

        </style>
    @endpush
    @php
    // SDK de Mercado Pago
    require base_path('/vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken('TEST-2008544547709808-041119-299926c55255470b2155299980a19ed3-708073805');
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = session()->get('description');
    $item->quantity = 1;
    $item->unit_price = session()->get('total');
    $preference->back_urls = [
        'success' => route('terminal.aproved'),
        'failure' => route('terminal.reject'),
    ];
    $preference->auto_return = 'approved';
    $preference->items = [$item];
    $preference->save();
    @endphp
    <div id="checkout-f" class="container mb-3">
        <div class="py-5 text-center">
            <h2 class="source-bold">Terminal de pago Virtual <br>
                <small>Pánel de usuario</small>
            </h2>
            <p class="source-regular">Recuerde comprobar que todos los datos incluidos son correctos, en caso contrario
                comuniquese al
                <span class="source-regular" style="color: gray;">
                    <a href="https://api.whatsapp.com/send/?phone=5219992005672" style="color: gray;">+52 1 999 200 5672</a>
                </span> <br> o por correo electrónico a <span class="source-regular" style="color: gray; ">
                    <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a>
                </span> para solicitar ajustes.
            </p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Información de pago</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Referencia</h6>
                            <small class="text-muted">{{ $order->contract }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Empresa</h6>
                            <small class="text-muted">{{ auth()->user()->company_name }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Razón social</h6>
                            <small class="text-muted">{{ auth()->user()->bussiness_name }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Puesto</h6>
                            <small class="text-muted">{{ auth()->user()->legal_representative_name }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Email</h6>
                            <small class="text-muted">{{ auth()->user()->email }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">
                                @foreach ($references as $reference)
                                    {{ $reference->description }}<br>
                                @endforeach
                            </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (MXN)</span>
                        <strong>${{ number_format($total) }}</strong>
                    </li>
                </ul>
            </div>

            <div class="col-md-8 order-md-1">
                {{-- <form class="needs-validation" action="{{ route('terminal.payment') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <li>
                                Tarjetas de crédito: <br>
                                <img src="{{ asset('/img/cards_vm.png') }}" class="img-fluid" alt="">
                            </li>
                        </div>
                        <div class="col-6 pb-3">
                            <li>
                                Tarjetas de débito: <br>
                                <img src="{{ asset('/img/cards_vm1.png') }}" class="img-fluid" alt="">
                            </li>
                        </div>
                        <input type="hidden" name="token_id" id="token_id">
                        <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                        <input type="hidden" name="amount" value="{{ $total }}">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Nombre</label>
                            <input type="text" class="form-control" type="text" placeholder="Como aparece en la tarjeta"
                                autocomplete="off" data-openpay-card="holder_name" name="name" required>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Número de la tarjeta</label>
                            <input type="text" class="form-control" autocomplete="off" data-openpay-card="card_number" name="card"
                                required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Mes de vigencia</label>
                            <select class="form-control" data-openpay-card="expiration_month" name="expiration_month">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div class="invalid-feedback">
                                Fecha de expiración requerida
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">año de expiración</label>
                            <select class="form-control" data-openpay-card="expiration_year" name="expiration_year">
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Código de seguridad</label>
                            <input type="text" class="form-control" type="text" placeholder="3 dígitos" autocomplete="off"
                                data-openpay-card="cvv2" name="cvv" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                            <div class="invalid-feedback">
                                Código de seguridad
                            </div>
                        </div>
                        <div class="col-md-3 pt-4">
                            <img src="{{ asset('/img/cvv_visaMastercard.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <small class="text-success mt-3">Tus pagos se realizan de forma segura con encriptación de 256
                        bits</small>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" id="pay-button">Pagar</button>
                    <div class="text-center mt-2">
                        <a  class="source-semibold" style="color: #004c98; text-decoration:none;" href="javascript:history.back()">Regresar</a>
                    </div>
                </form> --}}
                <div class="cho-container">

                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script src="https://sdk.mercadopago.com/js/v2"></script>
        <script>
            // Agrega credenciales de SDK
            const mp = new MercadoPago("TEST-e45fa672-0497-4c95-94aa-3871e0e086d1", {
                locale: "es-MX",
            });

            // Inicializa el checkout
            mp.checkout({
                preference: {
                    id: "{{ $preference->id }}",
                },
                render: {
                    container: ".cho-container", // Indica el nombre de la clase donde se mostrará el botón de pago
                    label: "Pagar", // Cambia el texto del botón de pago (opcional)
                },
            });
        </script>
    @endpush
