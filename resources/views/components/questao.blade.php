<div class="col col-md-12 d-flex justify-content-center" id="view-{{ $perguntaCollection->pergunta_id }}">
  <div class="card {{ $perguntaCollection->sn_primeiro == true ? '' : 'd-none' }}" style="width: 30rem;">
    <div class="card-header text-center text-uppercase font-weight-bold">{{ $perguntaCollection->ds_questionario }}</div>

    <div class="card-body pt-5 pb-3 p-4">
      <h5 class="card-title font-weight-light text-center mb-5" style="font-size: 30px;">{{ $perguntaCollection->ds_pergunta }}</h5>
    
      @switch($perguntaCollection->ds_tipo_pergunta)
          {{-- Casos em que será necessário utilizar checkbox --}}
          @case('checkbox')
                @foreach ($perguntaCollection->opcoes as $opcao)
                  <div class="form-check mb-3 d-flex align-items-center">
                    <input class="form-check-input"
                           type="checkbox"
                           data-id="{{ $perguntaCollection->questionario_id }}-{{ $perguntaCollection->pergunta_id }}-{{ $opcao->id }}"
                           data-questionario_id="{{ $perguntaCollection->questionario_id }}"
                           data-pergunta_id="{{ $perguntaCollection->pergunta_id }}"
                           data-pergunta_opcao_id="{{ $opcao->id }}"
                           data-direito="{{$opcao->direito_id}}"
                    >
                    <label class="form-check-label ml-3 p-3 bg-light border rounded">
                      {{ $opcao->ds_pergunta_opcao }}
                    </label>
                  </div>
                @endforeach

                <button class="btn btn-block btn-light border" 
                        data-current="view-{{ $perguntaCollection->pergunta_id }}" 
                        data-next="view-{{ $opcao->next_pergunta_id }}"
                >
                  Próxima Pergunta
                </button>
              @break
          
          {{-- Casos em que é necessário descrever algum texto --}}
          @case('text')
                <div class="form-group">
                  <textarea class="form-control"
                            rows="3"
                            maxlength="255"
                            data-questionario_id="{{ $perguntaCollection->questionario_id }}"
                            data-pergunta_id="{{ $perguntaCollection->pergunta_id }}"
                  ></textarea>
                </div>
              @break
          
          {{-- A maioria das questões utilizam input radio --}}
          @default
            @foreach ($perguntaCollection->opcoes as $opcao)
              <button class="btn btn-block btn-light border" 
                      data-current="view-{{ $perguntaCollection->pergunta_id }}" 
                      data-next="view-{{ $opcao->next_pergunta_id }}"
                      data-questionario_id="{{ $perguntaCollection->questionario_id }}"
                      data-pergunta_id="{{ $perguntaCollection->pergunta_id }}"
                      data-pergunta_opcao_id="{{ $opcao->id }}"
                      data-direito="{{$opcao->direito_id}}"
              >
                {{ $opcao->ds_pergunta_opcao }}
              </button>
            @endforeach
              
      @endswitch

      {{-- Adicionar o botão para submeter formulário na última questão --}}
      @if(!empty($perguntaCollection->sn_ultimo))
          <button class="btn btn-block btn-success border" id="btn-submit">Enviar</button>
      @endif
    </div>
  </div>
</div>