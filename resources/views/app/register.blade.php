@extends('layout.common')

@section('title', 'Cadastre sua conta')

@section('content')
<section class="min-h-full grid place-items-center">
    <div class="container max-w-xl">
        <div
            class="grid place-items-center w-full text-center bg-base-100 py-12 rounded shadow-lg ring-1 ring-base-300 px-4">
            <div class="flex items-center font-bold text-primary leading-6 text-2xl">
                @yield('title')
            </div>
            <form class="w-full max-w-sm text-base" action="{{ route('register.handle') }}" method="POST">
                <p class="font-semibold text-sm text-base-content mt-3 mb-6">Informe suas credenciais para se registrar
                </p>
                @method('PUT')
                @csrf
                <div class="flex flex-col font-semibold space-y-4">
                    <div class="flex flex-col space-y-2">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="input input-bordered w-full pl-10" placeholder="Seu nome completo">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                    </path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                            </div>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="input input-bordered w-full pl-10" placeholder="email@exemplo.com">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="password" name="password" id="password"
                                class="input input-bordered w-full pl-10" placeholder="Digite a senha">
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="input input-bordered w-full pl-10" placeholder="Confirme a senha">
                        </div>
                        <livewire:form-validation />
                        <button class="btn btn-primary rounded-t-none" type="submit">Registrar</button>
                        <div class="flex text-sm">
                            <p class="text-base-content pr-1">Já tem cadastro?</p><a class="link-hover link-primary"
                                href="{{ route('login') }}">Entrar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection