@extends("layout")
  @section("conteudo")
    <div class="container">
      <div class="container categorias">
      <h3><strong>Categorias</strong></h3>
         @if (isset($lista_cat) && count($lista_cat) > 0)
          <div class="btn-group-sm">
            <a class="btn btn-outline-primary 
            @if ($id_categoria == 0)
              active
            @endif" 
            href="{{route('categoria')}}">
              Todas
            </a>
            @foreach ($lista_cat as $cat)
                <a class="btn btn-outline-primary
                @if ($id_categoria == $cat->id)
                  active
                @endif 
                " href="{{route('categoria_id', ['idcategoria'=>$cat->id])}}">
                  {{$cat->categoria}}
                </a>
            @endforeach               
          </div>
          </div>    
        @endif
        @include('_produtos', ['lista_prod' => $lista_prod])
    </div>
  @endsection
