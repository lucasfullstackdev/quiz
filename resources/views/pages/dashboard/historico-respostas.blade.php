@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    
    {{-- @isset($historicoRespostas) --}}
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
                        {data: 'created_at'},
                        {
                            data: "view-pdf",
                            render: (data, type, row, meta) => button(row)
                        }
                        // {
                        //     "data": "action",
                        //     "render": (data, type, row, meta) => {
                        //         return '<a href="'+ $('link[rel="base"]').attr('href') + '/editar/' + row.id +'"\
                        //                    class="btn btn-xs btn-info"\
                        //                    title="Editar Pessoa"\
                        //                 >\
                        //                     <i class="fa fa-edit"></i>\
                        //                 </a>\
                        //                 <a href="'+ $('link[rel="base"]').attr('href') + '/excluir/' + row.id +'" id="person-'+ row.id +'" class="btn btn-xs btn-danger" data-toggle="confirmation" data-btn-ok-label="Sim" data-btn-ok-class="btn-success" data-btn-ok-icon-class="material-icons" data-btn-ok-icon-content="" data-btn-cancel-label="Não" data-btn-cancel-class="btn-danger" data-btn-cancel-icon-class="material-icons" data-btn-cancel-icon-content="" data-title="Tem certeza que deseja excluir o cadastro de '+ row.name +'?" data-content="Esta ação não poderá ser desfeita." title="Excluir Pessoa"> <i class="fa fa-trash"></i></a>';
                        //     }
                        // }
                        ],
                    });
        });
    </script>
@endpush