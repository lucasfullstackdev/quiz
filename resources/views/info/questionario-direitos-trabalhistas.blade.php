@extends('layouts.app')

@section('title', 'Informativo')

@section('content')
    
    <div class="container">
        <div class="row">
            <!-- lado esquerdo -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <img src="{{ asset('storage/info/certificate.png') }}" alt="" class="img-info">
            </div>
            
            <div class="col"></div>

            <!-- lado direito -->
            <div class="col-sm-12 col-md-7 col-lg-7">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <h2 class="text-center">Aparentemente você tem direitos trabalhistas para receber</h2>

                        <ul class="list-group list-group-flush">
                            @isset($respostas)
                                @foreach ($respostas as $resposta)
                                    @isset($resposta->direito)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <p>{!! $resposta->direito !!}</p>
                                            <i class="fa fa-check text-success"></i>
                                        </li>
                                    @endisset
                                @endforeach
                            @endisset
                            <hr>
                        </ul>

                        <h4 class="text-justify font-weight-light pt-3">
                            Aguarde que algum dos nossos especialistas entrará em contato com você!
                        </h4>
                    </div>
                </div>

                <!-- botão para redirecionamento -->
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <a href="{{ route('home.index') }}" role="button" class="btn btn-block btn-success mt-5">Entendi!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection