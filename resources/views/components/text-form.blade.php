<div class="col-md-12" id="view-{{ $perguntaCollection->pergunta_id }}">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $perguntaCollection->ds_pergunta }}</h5>
          
          @foreach ($perguntaCollection->opcoes as $opcao)
            <button data-target="view-{{ $opcao->next_pergunta_id }}" class="btn btn-block btn-light border">{{ $opcao->ds_pergunta_opcao }}</button>
          @endforeach
        </div>
    </div>
</div>