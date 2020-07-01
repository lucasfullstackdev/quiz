<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="{{ public_path('css/bootstrap.css') }}">
</head>
<style>
    .col { float: left; padding: 0px !important; }
    #header { height: 85px; }

    #header h1 {
        font-size: 30px;
        line-height: 45px;
    }

    #data-questionario { width:  100%; }
</style>
<body>
    <!-- header -->
    <div id="header">
        <div class="row">
            <div class="col col-sm-2">
                <img src="{{ public_path('storage/logo.jpg') }}" alt="" class="ml-3" width="75" height="75">
            </div>
            <div class="col col-sm-10">
                @isset($historicoRespostas)
                    <h1 class="text-center">{{ $historicoRespostas['questionario']['ds_questionario'] }}</h1>
                @endisset
            </div>
        </div>
    </div>
    <hr class="bg-dark p-0 m-0">

    <table id="data-questionario">
        <tr>
            <td width="45%"><b>Nome:</b></td>
            <td width="35%"><b>e-mail:</b></td>
            <td width="20%"><b>data:</b></td>
        </tr>
        @isset($historicoRespostas)
            <tr>
                <td><small> {{ $historicoRespostas['user']['name'] }} </small></td>
                <td><small> {{ $historicoRespostas['user']['email'] }}  </small></td>
                <td><small> {{ $historicoRespostas['questionario']['created_at'] }} </small></td>
            </tr>
        @endisset
    </table>
    <hr class="bg-dark mt-1">

        @isset($historicoRespostas)
            @isset($historicoRespostas['data'])
                @foreach ($historicoRespostas['data'] as $pergunta)
                    <h6><b>{{ $pergunta['ds_pergunta'] }}</b></h6>

                    @foreach ($pergunta['opcoes'] as $opcaoKey => $opcaoValue)
                        @if($opcaoValue != null)
                            <p><small><b>{{ ++$opcaoKey }} -> </b>{{ $opcaoValue }}</small></p>
                        @else
                            <p><small>{{ $pergunta['vl_pergunta'] }}</small></p>
                        @endif
                    @endforeach
                @endforeach
            @endisset
        @endisset
    {{-- @php
        dd(
            response()->json(
                $historicoRespostas['data'][0]
            )
        );
    @endphp --}}

</body>
</html>
