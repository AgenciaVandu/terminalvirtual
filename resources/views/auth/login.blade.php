{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@extends('layouts.splits-login')
@section('contenido')
    @push('css')
        <style>
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
        <link rel="stylesheet" href="{{ asset('/css/signin.css') }}">
    @endpush
    <div class="card form-signin">
        <form class="" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="text-center">
                <img class=" mb-4" src="{{ asset('/img/splits-logo.svg') }}" width="120" alt="">
            </div>
            <h4 class="mb-3 anek-500">Bienvenido a tu portal de pagos
                <br><span class="anek-300" style="font-size: .8em; color: gray">Inicia sesión para ver tu cuenta</span>
            </h4>
            <label class="anek-400 ">Correo electrónico</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <label class="anek-400 pt-4">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            <div class="checkbox mb-3">
                <label>
                    <input class="anek-400" type="checkbox" value="remember-me"> Recordarme
                </label>
            </div>
            <button href="/bill" class="btn btn-lg anek-600 btn-dark btn-block" type="submit">Comenzar</button>
            <div class="text-center mt-3 mb-2">
                <a class="underline anek-300 text-sm" href="{{ route('password.request') }}" style="color: #003EDE; text-decoration: none;">
                    {{ __('¿Olvidó su contraseña?') }}
                </a>
            </div>
        </form>
        <p class="text-center anek-300 mt-3 text-muted">Todos los derechos reservados splits®
            &copy;2022</p>
    </div>

@endsection
