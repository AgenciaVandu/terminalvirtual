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
<div id="checkout-f" class="container">
    <div class="py-5 text-center">
      <h2 class="source-bold">Terminal de pago Virtual</h2>
      <p class="source-regular">Recuerde comprobar que todos los datos incluidos son correctos, en caso contrario comuniquese al
        <span class="source-regular" style="color: gray;">
            <a href="tel:5219999306745" style="color: gray;">+52 1 999 930 6745</a>
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
                  <small class="text-muted">2092022-a</small>
                </div>
              </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Empresa</h6>
              <small class="text-muted">Agencia Vandu</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Razón social</h6>
              <small class="text-muted">Operadora ARSI SA de CV</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Representante Legal</h6>
              <small class="text-muted">Jhon Doe </small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Email</h6>
              <small class="text-muted">pagos@empresa.com</small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Segundo pago del motor de sincronización; licenciamiento vitalicio; servicio de implementación y poliza de mantenimiento anual.</h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$30,000</strong>
          </li>
        </ul>
      </div>

      <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate>
          <div class="row">
            <div class="col-6">
                <li>
                    Tarjetas de crédito: <br>
                    <img src="{{asset('/img/cards_vm.png')}}" class="img-fluid" alt="">
                </li>
            </div>
            <div class="col-6 pb-3">
                <li>
                    Tarjetas de débito: <br>
                    <img src="{{asset('/img/cards2_1.png')}}" class="img-fluid" alt="">
                    <img src="{{asset('/img/cards2_2.png')}}" class="img-fluid" alt="">
                    <img src="{{asset('/img/cards2_3.png')}}" class="img-fluid" alt="">
                </li>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nombre</label>
              <input type="text" class="form-control" id="cc-name" placeholder="Como aparece en la tarjeta" required>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Número de la tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="XXXX XXXX XXXX XXXX" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Fecha de expiración</label>
              <select class="form-control" id="exampleFormControlSelect1" placeholder="-- Mes --">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <div class="invalid-feedback">
                Fecha de expiración requerida
              </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="cc-expiration">Fecha de expiración</label>
              <select class="form-control" id="exampleFormControlSelect1" placeholder="-- Mes --">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Código de seguridad</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
              <div class="invalid-feedback">
                Código de seguridad
              </div>
            </div>
            <div class="col-md-3 pt-4">
                <img src="{{asset('/img/cvv_visaMastercard.png')}}" class="img-fluid" alt="">
            </div>
          </div>

          <h5 class="pt-3 mb-3 source-bold">Método de pago</h5>
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Tarjeta de débito</label>
            </div>
          </div>
          <small class="text-success mt-3">Tus pagos se realizan de forma segura con encriptación de 256 bits</small>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Pagar</button>
        </form>
      </div>
    </div>

@endsection
