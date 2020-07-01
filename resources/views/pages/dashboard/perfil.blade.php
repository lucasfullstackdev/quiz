@extends('layouts.dashboard')

@section('title', 'Perfil')

@section('content')
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif --}}

    <h2 class="text-left">Perfil do Usuário</h2>
    <hr>

    <form action="{{ route('dashboard.perfil.update') }}" method="POST">
        @csrf
        @method('put')

        <!-- Dados para Contato -->
        <x-input-text input-name="name" placeholder="Informe seu nome completo" label="Nome Completo" :collection="$user"/>

        <div class="form-row">
            <div class="col">
                <x-input-icon input-name="email" placeholder="E-mail..." label="E-mail:" :collection="$user" type="email" icon="fa fa-envelope-o"/>
            </div>
            <div class="col">
                <x-input-icon input-name="fone" placeholder="Fone..." label="Telefone:" :collection="$user" icon="fa fa-phone"/>
            </div>
        </div>
        
        <!-- Endereço -->
        <br>
        <h4>Endereço: </h4>
        <hr>
        
        <x-input-text input-name="cep" placeholder="CEP..." label="CEP:" :collection="$user" grid="3"/>

        <div class="form-row">
            <div class="col-sm-11">
                <x-input-text input-name="logradouro" placeholder="Logradouro..." label="Logradouro:" :collection="$user" />
            </div>
            <div class="col-sm-1">
                <x-input-text input-name="numero" label="Nº:" :collection="$user" />
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-3 mb-2">
                <x-input-text input-name="bairro" placeholder="Bairro..." label="Bairro:" :collection="$user" />
            </div>

            <div class="col-sm-3 mb-2">
                <x-input-text input-name="complemento" placeholder="Complemento..." label="Complemento:" :collection="$user" />
            </div>

            <div class="col mb-2">
                <x-input-text input-name="cidade" placeholder="Cidade..." label="Cidade:" :collection="$user" />
            </div>

            <div class="col-sm-1 mb-2">
                <x-select input-name="uf_id" label="UF:" :collection="$user" table="uf" :nat="['value' => 'id', 'description' => 'slug']"/>
            </div>
        </div>

        <!-- Social -->
        <br>
        <h4>Social</h4>
        <hr>

        <div class="form-row">
            <div class="col">
                <label>Whatsapp: </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-whatsapp"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp') ??  $user->whatsapp }}" placeholder="Whatsapp...">
                </div>
            </div>

            <div class="col">
                <label>Instagram: </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-instagram"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="instagram" value="{{ old('instagram') ?? $user->instagram }}" placeholder="Instagram...">
                </div>
            </div>
            
            <div class="col">
                <label>Facebook: </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-facebook"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="facebook" value="{{ old('facebook') ?? $user->facebook }}" placeholder="Facebook...">
                </div>
            </div>
        </div>

        <!-- Social -->
        <br>
        <h4>Senha</h4>
        <hr>

        <div class="form-row">
            <div class="col">
                <label>Senha: </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('email') }}" name="password" placeholder="Senha...">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col">
                <label>Confirmação de senha:</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmação de senha...">
            </div>
        </div>
        
        <br>
        <div class="form-row d-flex justify-content-end">
            <div class="col col-md-2">
                <button type="submit" class="btn btn-block btn-success">Salvar</button>
            </div>
        </div>
    </form>

@endsection