@extends("layout")
  @section("conteudo")

  <div id="carrossel">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="/assets/images/destaque01.jpg" class="d-block w-100" alt="..." >
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="/assets/images/destaque02.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="/assets/images/destaque03.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="/assets/images/destaque04.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
  </div>

  <div class="container bg-light text-center p-3 welcome mt-5 mb-5">
    <h1>Bem-vindo ao Mercado Atacadão!</h1>
    <img src="/assets/images/user.png" alt="Usuário" width="150">
    <h2>Olá, usuário!</h2>
  </div>

  <div class="container produtos bg-light ">
    
    <h1 class="p-3"><img src="/assets/images/tag.png" alt="Tag de preço" width="50px">Os melhores preços, só no Mercado Atacadão!</h1>
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
  
  @endsection
