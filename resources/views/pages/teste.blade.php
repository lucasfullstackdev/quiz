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
        let currentTarget;
        let dataToSubmit = [];

        // Verificar se objeto possui as propriedades passadas
        const objectHasProperties = (obj, props) => {
            let missingProperty = true;

            for (const dataView in obj){
                props.map( prop => {
                    if (!obj.hasOwnProperty(prop))
                        missingProperty = false;
                });
            }

            return missingProperty;
        };

        // Verificar se o objeto pode ser utilizado para redicionamento
        const dataViewIsInvalidToNextView = () => {
            return $.isEmptyObject(currentTargetData) || !objectHasProperties(currentTargetData, ['next', 'current']);
        }

        // Verificar se o objeto pode ser utilizado para preenchimento dos valores do formulário
        const dataViewIsInvalidToSubmit = () => {
            const properties = ['questionario_id', 'pergunta_id', 'pergunta_opcao_id'];
            return $.isEmptyObject(currentTargetData) || !objectHasProperties(currentTargetData, properties);
        };

        // Exibir Próxima view [questão]
        const showNextView = (current, next) => {
            let currentView = $(`#${current}`).find('.card');
            let nextView = $(`#${next}`).find('.card');

            currentView.fadeOut("slow", () => {
                currentView.toggleClass('d-none'); 
                nextView.toggleClass('d-none'); 
            });
        };

        // controle de visibilidade das views
        const controlView = ev => {
            if (dataViewIsInvalidToNextView())
                return null;
                
            let currentView = currentTargetData.current;
            let nextView = currentTargetData.next;

            showNextView(currentView, nextView);
        };

        // Preparar os dados para submissão do formulário
        const prepDataToSubmit = ev => {
            if (dataViewIsInvalidToSubmit())
                return null;

            dataToSubmit.push({
                questionario_id: currentTargetData.questionario_id,
                pergunta_id: currentTargetData.pergunta_id,
                pergunta_opcao_id: currentTargetData.pergunta_opcao_id
            });
        };

        let checkboxTemp = {
            pergunta_opcao_id: []
        };

        $(document).ready( function(){

            $('button').on('click', ev => {
                currentTargetData = $(ev.currentTarget).data();

                controlView(ev);
                prepDataToSubmit(ev);
            });

            $('input:checkbox').on('click', ev => {
                currentTarget = $(ev.currentTarget);
                currentTargetData = currentTarget.data();

                checkboxTemp.questionario_id = currentTargetData.questionario_id;
                checkboxTemp.pergunta_id = currentTargetData.pergunta_id;

                if ($.inArray(currentTargetData.pergunta_opcao_id, checkboxTemp.opcoes) == -1)
                    checkboxTemp.pergunta_opcao_id.push(currentTargetData.pergunta_opcao_id);

                // se estiver desmarcado -> remover da estrutura de dados                
                if (!currentTarget.is(':checked')){
                    checkboxTemp.opcoes.map( (opcao, index) => {
                        if (opcao == currentTargetData.pergunta_opcao_id)
                            return checkboxTemp.opcoes.splice(index, 1);
                    });
                }
            });

            $('#btn-submit').on('click', () => {
                console.log(dataToSubmit);
                console.log(checkboxTemp);
            });

        });
    </script>    
@endpush
