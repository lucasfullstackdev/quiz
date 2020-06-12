@extends('layouts.app')

@section('title', 'Questionário')

@isset($questionario)
    @foreach ($questionario as $pergunta)
        <x-text-form :perguntaCollection="$pergunta" />
    @endforeach
@endisset

@push('scripts')
    <script type="text/javascript">
        $(document).ready( function(){
            $('button').on('click', ev => {
                let tst = $(ev.currentTarget).data().target;

                $(`#${tst} .card`).addClass('bg-danger');
                console.log(tst);
                console.log($(`#${tst}`));
            });
        });
    </script>    
@endpush
