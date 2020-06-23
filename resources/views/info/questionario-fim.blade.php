@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row">
            <!-- lado esquerdo -->
            <div class="col-sm-12 col-md-5 col-lg-6">
                <img src="{{ asset('img/info/info-begin.png') }}" alt="" class="img-info">
            </div>
            
            <!-- lado direito -->
            <div class="col-sm-12 col-md-7 col-lg-6">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <h4 class="text-justify font-weight-light mb-3">
                            Quase lá!
                        </h4>
                        <h4 class="text-justify font-weight-light">
                            Você tem direito a receber suas verbas rescisórias e uma indenização pelo assédio moral sofrido no trabalho.
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