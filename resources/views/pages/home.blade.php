<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Título</title>

    <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}">
</head>
<style>
    .jumbotron {
        margin: 0px;
        text-align: center;
        padding-top: 6rem;
    }

    .bg-cover {
        background-image: url("{{ asset('img/bg-home.jpg') }}");
        background-size: 100%;
    }

    .jumbotron h2 { color: #fff; }
    .jumbotron .header-info { padding-bottom: 5rem; }

    .overlay {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        background-color: gray;
        opacity: 0.5;
    }

    /* Card 
     * ==============================================
     */
    
    .card {
        min-height: 255px;
        background-color: rgb(245, 245, 245) !important;
        opacity: 0.8;
    }
    .card a { text-decoration: none; }
    .card img { max-height: 150px; max-width: 150px; }

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
                    {{-- @php
                        dd(
                            response()->json($questionario)
                        );
                    @endphp --}}
                    <div class="col">
                        <div class="card bg-transparent">
                            <a href="" class="text-dark">
                                <img class="card-img-top align-self-center" src="{{ asset($questionario->ds_questionario_icon) }}" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $questionario->ds_questionario }}</h5>
                                </div>
                            </a>
                        </div>
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