@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    
    <table id="people-table" class="col-md-12 table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Questionário</th>
                <th>ID Usuário</th>
                <th>Usuário</th>
                <th>Data</th>
                <th width="5%">PDF</th>
            </tr>
        </thead>
    </table>

@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready( function(){
            const button = row => {
                let route = `historico-respostas/questionario/${row.questionario_id}/user/${row.user_id}/created/${row.created_at}`;
                
                return `<a href="${route}" class="btn btn-block btn-danger" role="button" target="_blank">
                            <i class="fa fa-file"></i>
                        </a>`;
            };

            var table = $('#people-table').DataTable({
                language: {
                    url: "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
                },
                destroy: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{!! route('historico-respostas.index') !!}",
                columns: [
                    {data: 'questionario_id'},
                    {data: 'questionario_description'},
                    {data: 'user_id'},
                    {data: 'user_name'},
                    {data: 'created_at_'},
                    {
                        data: "view-pdf",
                        render: (data, type, row, meta) => button(row)
                    }
                ],
            });
        });
    </script>
@endpush