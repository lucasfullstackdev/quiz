@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <!-- lado esquerdo -->
            <div class="col">
                <img src="{{ asset('img/info/info-begin.png') }}" alt="" class="img-info">
            </div>
            
            <!-- lado direito -->
            <div class="col">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <h4 class="text-justify font-weight-light mb-3">
                            Olá! Vamos te ajudar a verificar se você possui ou não direito ao recebimento de verbas trabalhistas.
                        </h4>
                        <h4 class="text-justify font-weight-light">
                            Para isso, iremos te fazer algumas perguntas bem rápidas. Selecione as opções que condizem com sua situação.
                        </h4>
                    </div>
                </div>

                <!-- botão para redirecionamento -->
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <a href="{{ route('questionario.show', ['id_questionario' => $questionario_id]) }}" role="button" class="btn btn-block btn-success mt-5">Entendi!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection