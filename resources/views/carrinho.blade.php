@extends("layout")
  @section("conteudo")
    <div class="container">
      <h3><strong>Itens no Carrinho</strong></h3>
      @if (isset($cart) && count($cart) > 0)
        <table class="table table-light">
          <thead class="thead-light">
            <tr>
              <th>Nome</th>
              <th>Valor</th>
              <th>Foto</th>
              <th>Remover</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cart as $iditem => $c)
              <tr>
                <td>{{$c->nome}}</td>
                <td>{{'R$ ' . number_format($c->valor, 2, ',', '.')}}</td>
                <td><img src="{{asset($c->foto)}}" alt="..." width="100px"></td>
                <td><a class="btn btn-danger btn-sm" href="{{route('rmcarrinho', ['iditem' => $iditem ])}}">
                <i class="fa fa-trash"></i>  
                </a></td>
            @endforeach
            <tr>
              <td>
              @php
               $total = 0;

               foreach ($cart as $iditem => $c) {
                $total += $c->valor;
               }
               @endphp
              <h3>Total:R$ &nbsp;<span class="display-6">{{$total}}</span></h3>
            </td>
          </tr>
          </tbody>
        </table>
        <a href="#" class="btn btn-success w-100">Finalizar pedido</a>
      @else
        <h3 class="display-6">Não há nenhum item no carrinho, tente adicionar algum!</h3>
        <img src="/assets/images/caixa.png" alt="Caixa Vazia" width="300" class="mt-3 mb-3">
        <a href="/" class="btn btn-success w-100">Adicionar itens</a>
      @endif
     
    </div>

  @endsection
