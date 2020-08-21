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
                <h1 class="text-center">Perfil do usuário</h1>
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
        @isset($user)
            <tr>
                <td><small> {{ $user['name'] ?? '' }} </small></td>
                <td><small> {{ $user['email'] ?? '' }}  </small></td>
                <td><small> {{ $user['created_at'] ?? '' }} </small></td>
            </tr>
        @endisset
    </table>

    <br>
    <h5 class="text-left">Social</h5>
    <hr class="bg-dark">
    @isset($user)
        <p><b>Whatsapp: </b>{{ $user['whatsapp'] ?? '' }}</p>
        <p><b>Facebook: </b>{{ $user['facebook'] ?? '' }}</p>
        <p><b>Instagram: </b>{{ $user['instagram'] ?? '' }}</p>
    @endisset

    <br>
    <h5 class="text-left">Endereço</h5>
    <hr class="bg-dark">
    @isset($user)
        <p><b>Logradouro:</b> {{ $user['logradouro'] ?? '' }}, Nº: {{ $user['numero'] ?? '' }} - CEP: {{ $user['cep'] ?? '' }}</p>
        <p><b>Bairro: </b>{{ $user['bairro'] ?? '' }}</p>
        <p><b>Complemento: </b>{{ $user['complemento'] ?? '' }}</p>
        <p><b>Cidade: </b>{{ $user['cidade'] ?? '' }}</p>
        <p><b>Estado: </b>{{ $user['uf']['titulo'] ?? '' }}</p>
    @endisset

</body>
</html>