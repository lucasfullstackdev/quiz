<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz | @yield('title')</title>

    <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/dev.css')) }}">
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="https://laravel.com/img/logomark.min.svg" width="30" height="30" alt="" class="mr-2">
                Quiz
            </a>
        </div>
    </nav>

    <!-- application content -->
    <section class="container-fluid">
        <div class="row pt-5 p-3">
            <div class="col">
                @section('content')
                @show
            </div>
        </div>
    </section>

    <script src="{{ url(mix('js/jquery.js')) }}"></script>
    <script src="{{ url(mix('js/bootstrap.js')) }}"></script>
    
    @stack('scripts')
</body>
</html>