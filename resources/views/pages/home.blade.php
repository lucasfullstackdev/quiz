<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título</title>

    <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/dev.css')) }}">
</head>
<style>
    .bg-cover {
        background-image: url("{{ asset('img/bg-home.jpg') }}");
        background-size: 100%;
    }
</style>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://laravel.com/img/logomark.min.svg" width="30" height="30" alt="" class="mr-2">
                Quiz
            </a>

            <button class="btn btn-success">Entrar</button>
        </div>
    </nav>

    <!-- Content -->
    <div class="jumbotron jumbotron position-relative bg-cover">
        {{-- <div class="overlay"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-info">
                        <h2 class="display-3 font-weight-bold">Verbas trabalhistas</h2>
                        <h3>Veja o que você deve receber.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @isset($questionarios)
                    @foreach ($questionarios as $questionario)
                        <div class="col">
                            <form action="{{ route('info.showbypost') }}" method="post">
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
    </div>

    <script src="{{ url(mix('js/jquery.js')) }}"></script>
    <script src="{{ url(mix('js/bootstrap.js')) }}"></script>
    
    @stack('scripts')
</body>
</html>