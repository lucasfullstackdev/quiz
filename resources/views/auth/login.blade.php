@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
    <!-- Informativo -->
    <div class="row d-flex justify-content-center info mb-5">
        <div class="col-md-8 info">
            <h2 class="display-4">Verifique se você tem direito a receber verbas trabalhistas gratuitamente!</h2>
            <h5>
                Confira em poucos minutos quais direitos você tem para receber.
                Mas antes de seguir insira seu nome e telefone para contato.
            </h5>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        {{-- <div class="row justify-content-center"> --}}
        <div class="col-sm-12 col-md-7 col-lg-4">
            <div class="card bg-success">
                <!-- Corpo do card -->
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- E-mail -->
                        <div class="form-group">
                            <input id="email"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') ?? 'primeiro@usuario.com.br' }}"
                                    placeholder="E-mail ..."
                                    required
                                    autofocus
                            >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Senha -->
                        <div class="form-group">
                            <input id="password"
                                    type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    placeholder="Senha ..."
                                    value="123456789"
                                    required
                            >

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-block btn-success">Entrar</button>
                        <hr>

                        <!-- Rota para registro do usuário -->
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-block btn-primary" role="button" aria-disabled="true">Cadastrar</a>
                        @endif
                        
                        <!-- Rota para recuperação de senha -->
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-danger mt-2" href="{{ route('password.request') }}">Esqueci minha senha</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
