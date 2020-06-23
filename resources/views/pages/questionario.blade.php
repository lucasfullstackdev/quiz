@extends('layouts.app')

@section('title', 'Questionário')

@section('content')
    @isset($questionario)
            @foreach ($questionario as $pergunta)
                <x-text-form :perguntaCollection="$pergunta" />
            @endforeach
    @endisset
@endsection

@push('scripts')
    <script type="text/javascript">
        let currentTarget;
        let dataToSubmit = [];
        let questionario_id = @json($questionario_id);

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
            
            // Adicionar as opção do type checkbox no dataToSubmit ao ir para próxima questão
            if (Object.keys(checkboxTemp).length != 1)
                dataToSubmit.push(checkboxTemp);

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
                pergunta_opcao_id: [currentTargetData.pergunta_opcao_id]
            });
        };

        let checkboxTemp = {
            pergunta_opcao_id: []
        };

        $(document).ready( function(){

            // Pegar valores para o tipo de pergunta [radio]
            $('button').on('click', ev => {
                ev.preventDefault();
                currentTargetData = $(ev.currentTarget).data();

                controlView(ev);
                prepDataToSubmit(ev);
            });

            // Pegar valores para o tipo de pergunta [checkbox]
            $('input:checkbox').on('click', ev => {
                currentTarget = $(ev.currentTarget);
                currentTargetData = currentTarget.data();

                checkboxTemp.questionario_id = currentTargetData.questionario_id;
                checkboxTemp.pergunta_id = currentTargetData.pergunta_id;

                if ($.inArray(currentTargetData.pergunta_opcao_id, checkboxTemp.pergunta_opcao_id) == -1)
                    checkboxTemp.pergunta_opcao_id.push(currentTargetData.pergunta_opcao_id);

                // se estiver desmarcado -> remover da estrutura de dados                
                if (!currentTarget.is(':checked')){
                    checkboxTemp.pergunta_opcao_id.map( (opcao, index) => {
                        if (opcao == currentTargetData.pergunta_opcao_id)
                            return checkboxTemp.pergunta_opcao_id.splice(index, 1);
                    });
                }
            });

            // Pegar valores para o tipo de pergunta [textarea]
            $('textarea').on('blur', ev => {
                currentTarget = $(ev.currentTarget);
                currentTargetData = currentTarget.data();
                
                if (currentTarget.val() == '')
                    return null;

                currentTargetData.vl_pergunta = currentTarget.val();
                dataToSubmit.push(currentTargetData);
            });

            $('#btn-submit').on('click', () => {
                $.ajax({
                    url: '{{ route("questionario.store") }}',
                    type: 'post',
                    data: {
                        data: dataToSubmit,
                        questionario_id,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(response){
                        if (response.success == true)
                            window.location.href = `/informativo/2`;
                    },
                    error: function(error){
                        console.log('not ok')
                    }
                });
            });

        });
    </script>    
@endpush
