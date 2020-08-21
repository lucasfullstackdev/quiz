<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz | @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/dev.css')) }}">

    <meta property="og:image" content="{{ asset('storage/logo.jpg') }}"/>  
    <meta property="og:title" content="Your Title"/>  
    <meta property="og:description" content="Your description."/>  
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <img src="{{ asset('storage/logo.jpg') }}" alt="" class="mr-2">
                Quiz
            </a>
        </div>
    </nav>

    <!-- application content -->
    <section class="container-fluid pt-5 pb-5">
        <div class="row">
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