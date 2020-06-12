@extends('layouts.app')

@section('title', 'Questionário')

@section('content')
    @isset($questionario)
        @foreach ($questionario as $pergunta)
            {{-- @php
                dd(
                    response()->json($pergunta)
                );
            @endphp --}}
            <x-text-form :perguntaCollection="$pergunta" />
        @endforeach
    @endisset
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready( function(){
            let questionarioSize = @json($questionario).length;
            let dataToSubmit = [];

            const showNextView = (current, next) => {
                let currentView = $(`#${current}`).find('.card');
                let nextView = $(`#${next}`).find('.card');

                currentView.fadeOut("slow", () => {
                    currentView.toggleClass('d-none'); 
                    nextView.toggleClass('d-none'); 
                });
            };

            const controlView = ev => {
                let currentTarget = $(ev.currentTarget);
                let currentView = currentTarget.data().current;
                let nextView = currentTarget.data().next;

                showNextView(currentView, nextView);
            };

            const prepDataToSubmit = ev => {
                let currentTarget = $(ev.currentTarget).data();
                
                if (dataToSubmit.length == questionarioSize - 2)
                    console.log('now');

                dataToSubmit.push({
                    questionario_id: currentTarget.questionario_id,
                    pergunta_id: currentTarget.pergunta_id,
                    opcao_id: currentTarget.opcao_id
                });
            };

            $('button').on('click', ev => {
                controlView(ev);
                prepDataToSubmit(ev);
            });

        });
    </script>    
@endpush
