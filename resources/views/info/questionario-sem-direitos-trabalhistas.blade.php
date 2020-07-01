@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-3">
                <img src="{{ asset('/storage/info/warning.png') }}" alt="" class="img-info">
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <h5 class="text-center">Infelizmente você perdeu o prazo para requerer seus direitos.<br>
                O prazo para cobrar seus direitos é de 2 anos a contar do último dia de trabalho.</h5>
                <p class="text-center mt-5">
                    Clique no botão a seguir para retornar à página inicial e verifique outro caso
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-center pt-5">
            <div class="col-md-2">
                <a href="{{ route('home.index') }}" class="btn btn-block btn-success" role="button">Ir Para o Início</a>
            </div>
        </div>
    </div>

@endsection