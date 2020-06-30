@extends('layouts.dashboard')

@section('title', 'Perfil')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <h2 class="text-left">Perfil do Usuário</h2>
    <hr>

    <form action="{{ route('dashboard.perfil.update') }}" method="POST">
        @csrf
        @method('put')

        <!-- Dados para Contato -->
        <div class="form-group">
            <label>Nome Completo:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') ?? $user->name }}" placeholder="Informe seu nome completo...">
        </div>

        <div class="form-row">
            <div class="col">
                <label>E-mail: </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" maxlength="255" placeholder="E-mail...">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <label>Telefone: </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="fone" value="{{  old('fone') ?? $user->fone }}" placeholder="Fone ...">
                </div>
            </div>
        </div>
        
        <!-- Endereço -->
        <br>
        <h4>Endereço: </h4>
        <hr>
        
        <div class="form-row">
            <div class="col-sm-3 mb-2">
                <label>CEP: </label>
                <input type="text" class="form-control" name="cep" value="{{  old('cep') ?? $user->cep }}" placeholder="CEP...">
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-11 mb-2">
                <label>Logradouro: </label>
                <input type="text" class="form-control" name="logradouro" value="{{  old('logradouro') ?? $user->logradouro }}" placeholder="Logradouro...">
            </div>

            <div class="col-sm-1 mb-2">
                <label>Nº: </label>
                <input type="text" class="form-control" name="numero" value="{{  old('numero') ?? $user->numero }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-3 mb-2">
                <label>Bairro: </label>
                <input type="text" class="form-control" name="bairro" value="{{  old('bairro') ?? $user->bairro }}" placeholder="Bairro...">
            </div>

            <div class="col-sm-3 mb-2">
                <label>Complemento: </label>
                <input type="text" class="form-control" name="complemento" value="{{  old('complemento') ?? $user->complemento }}" placeholder="Complemento...">
            </div>

            <div class="col mb-2">
                <label>Cidade: </label>
                <input type="text" class="form-control" name="cidade" value="{{  old('cidade') ?? $user->cidade }}" placeholder="Cidade...">
            </div>

            <div class="col-sm-1 mb-2">
                <label>UF: </label>
                <select class="custom-select" name="uf" value="{{ $user->uf }}">
                    <option value="">UF</option>
                    @isset($uf)
                        @foreach ($uf as $item)
                            <option value="{{ $item->id }}">{{ $item->slug }}</option>
                        @endforeach
                    @endisset
                </select>
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