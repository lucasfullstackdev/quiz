@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    
    @isset($historicoRespostas)
        @foreach ($historicoRespostas as $historicoResposta)
            @php
                dd(
                    response()->json($historicoResposta)
                );
            @endphp
        @endforeach
    @endisset

@endsection