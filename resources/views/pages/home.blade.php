<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título</title>

    <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/dev.css')) }}">

    <meta property="og:image" content="{{ asset('storage/thumbnail.jpg') }}"/>  
    <meta property="og:title" content="Escritório | Quiz"/>  
    <meta property="og:description" content="Descubra de uma maneira simples e fácil se você possui direitos trabalhistas a receber"/>
    <link rel="shortcut icon" sizes="32x32" href="{{ asset('storage/favicon.ico') }}" />
</head>
<style>
    .bg-cover {
        background-image: url("{{ asset('storage/bg-home.jpg') }}");
        background-size: 100%;
    }
</style>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('storage/logo.jpg') }}" alt="" class="mr-2">
                Quiz
            </a>
            <a href="{{ route('dashboard.index') }}" class="btn btn-success" role="button">Entrar</a>
        </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-cover">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-info">
                        <h2 class="display-3 font-weight-bold">Verbas trabalhistas</h2>
                        <h3>Veja o que você deve receber.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <div class="row pb-5">
            <div class="col">
                <h2 class="text-center">Selecione uma das opções abaixo</h2>
            </div>
        </div>
        <div class="row">
            @isset($questionarios)
                @foreach ($questionarios as $questionario)
                    <div class="col-sm-12 col-md-6 col-lg-3 pb-3">
                        <form action="{{ route('info.show') }}" method="post">
                            @csrf

                            <input type="hidden" name="informativo_id" value="1" class="hidden">
                            <input type="hidden" name="questionario_id" value="{{ $questionario->id }}" class="hidden">

                            <!-- O conteúdo do card fica no button do formulário -->
                            <button type="submit" class="btn btn-block">
                                <div class="card bg-transparent">
                                    <img class="card-img-top align-self-center" src="{{ asset($questionario->ds_questionario_icon) }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $questionario->ds_questionario }}</h5>
                                    </div>
                                </div>
                            </button>
                        </form>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>

    <script src="{{ url(mix('js/jquery.js')) }}"></script>
    <script src="{{ url(mix('js/bootstrap.js')) }}"></script>
    
    @stack('scripts')
</body>
</html>