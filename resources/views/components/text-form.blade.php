<div class="col col-md-12 d-flex justify-content-center" id="view-{{ $perguntaCollection->pergunta_id }}">
  <div class="card {{ $perguntaCollection->sn_primeiro == true ? '' : 'd-none' }}" style="width: 30rem;">
    <div class="card-header text-center text-uppercase font-weight-bold">{{ $perguntaCollection->ds_questionario }}</div>

    <div class="card-body pt-5 pb-3 p-4">
      <h5 class="card-title font-weight-light text-center mb-5" style="font-size: 30px;">{{ $perguntaCollection->ds_pergunta }}</h5>

      @if (count($perguntaCollection->opcoes) != 0)
        @foreach ($perguntaCollection->opcoes as $opcao)
          <button class="btn btn-block btn-light border" 
                  data-current="view-{{ $perguntaCollection->pergunta_id }}" 
                  data-next="view-{{ $opcao->next_pergunta_id }}"
                  data-questionario_id="{{ $perguntaCollection->questionario_id }}"
                  data-pergunta_id="{{ $perguntaCollection->pergunta_id }}"
                  data-opcao_id="{{ $opcao->id }}"
          >
            {{ $opcao->ds_pergunta_opcao }}
          </button>
        @endforeach
      @else
          <button>safsd</button>
      @endif
      
      
    </div>
  </div>
</div>