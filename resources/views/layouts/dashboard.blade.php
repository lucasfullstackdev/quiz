<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz | @yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url(mix('css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('css/datatable.css')) }}">
    
    <link rel="stylesheet" href="{{ url(mix('css/dev.css')) }}">
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                <img src="{{ asset('storage/logo.jpg') }}" alt="" class="mr-2">
                Quiz
            </a>
            <a href="{{ route('logout') }}" class="btn btn-danger">logout</a>
        </div>
    </nav>

    <section class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0 border-right border-secondary bg-dark overflow-auto" style="max-width: 300px;">
                <nav id="sidebar" style="height: calc(100vh - 80px);">
                    <ul class="list-group list-group-flush">
                        @isset($menus)
                            @foreach ($menus as $menu)
                                <a href="{{ route($menu->ds_menu_route) }}" role="button" class="list-group-item list-group-item-action bg-transparent text-light border-bottom border-secondary">
                                    <div class="d-flex w-100 justify-content-between">
                                        <i class="{{ $menu->ds_menu_icon }}" style="font-size: 20px;"></i>
                                        <h5 class="mb-1 mr-2">{{ $menu->ds_menu }}</h5>
                                    </div>
                                </a>   
                            @endforeach
                        @endisset
                    </ul>
                </nav>
            </div>
            
            <!-- application content -->
            <div class="col pt-5 pb-5 overflow-auto" style="height: calc(100vh - 80px);">
                @section('content')
                @show
            </div>
        </div>
    </section>

    <script src="{{ url(mix('js/jquery.js')) }}"></script>
    <script src="{{ url(mix('js/jquery-datatable.js')) }}"></script>
    <script src="{{ url(mix('js/bootstrap.js')) }}"></script>
    <script src="{{ url(mix('js/bootstrap-datatable.js')) }}"   ></script>
    
    @stack('scripts')
</body>
</html>