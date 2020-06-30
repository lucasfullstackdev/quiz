@extends('layouts.dashboard')

@section('title', 'Perfil')

@section('content')
    
    <table id="people-table" class="col-md-12 table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data</th>
                <th width="5%">PDF</th>
            </tr>
        </thead>
    </table>

@endsection