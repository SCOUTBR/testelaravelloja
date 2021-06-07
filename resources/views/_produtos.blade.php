<div class="container-fluid">
  <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mb-2">
    @if (isset($lista_prod))
      @foreach ($lista_prod as $prod)        
        <div class="col">
            <div class="card h-100 cartao">
                <img src="{{ asset($prod->foto) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-title">{{ $prod->nome }}</h6>
                    <h4 class="text-danger">R$ {{ number_format($prod->valor, 2, ',', '.') }}</h4>
                    <p class="card-text">{{ mb_strimwidth($prod->descricao, 0, 100 ) }}...
                </div>
                <div class="card-footer">
                    <a href="{{route('addcarrinho', ['idprod' => $prod->id])}}" class="btn btn-success">Adicione ao carrinho</a>
                </div>
            </div>
        </div>
      @endforeach
    @endif
  </div>
</div>
