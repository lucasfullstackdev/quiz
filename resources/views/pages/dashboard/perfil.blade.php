@extends('layouts.dashboard')

@section('title', 'Perfil')

@section('content')
    <h2 class="text-left">Perfil do Usuário</h2>
    <hr>

    <form action="" method="POST">
        @csrf

        <!-- Dados para Contato -->
        <div class="form-group">
            <label>Nome Completo:</label>
            <input type="text" class="form-control" placeholder="Informe seu nome completo...">
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
                    <input type="text" class="form-control" placeholder="E-mail...">
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
                    <input type="text" class="form-control" placeholder="Fone ...">
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
                <input type="text" class="form-control" placeholder="CEP...">
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-11 mb-2">
                <label>Logradouro: </label>
                <input type="text" class="form-control" placeholder="Logradouro...">
            </div>

            <div class="col-sm-1 mb-2">
                <label>Nº: </label>
                <input type="text" class="form-control">
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-3 mb-2">
                <label>Bairro: </label>
                <input type="text" class="form-control" placeholder="Bairro...">
            </div>

            <div class="col-sm-3 mb-2">
                <label>Complemento: </label>
                <input type="text" class="form-control" placeholder="Complemento...">
            </div>

            <div class="col mb-2">
                <label>Cidade: </label>
                <input type="text" class="form-control" placeholder="Cidade...">
            </div>

            <div class="col-sm-1 mb-2">
                <label>UF: </label>
                <select class="custom-select">
                    <option value=""></option>
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
                    <input type="text" class="form-control" placeholder="Whatsapp...">
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
                    <input type="text" class="form-control" placeholder="Instagram...">
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
                    <input type="text" class="form-control" placeholder="Facebook...">
                </div>
            </div>
        </div>
         
    </form>

@endsection