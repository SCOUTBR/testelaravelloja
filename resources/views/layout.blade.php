<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Mercado Atacadão</title>

        {{-- Fonts --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        {{-- Bootstrap Style --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        {{-- Meu estilo --}}
        <link rel="stylesheet" href="/css/style.css">
    </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
          <a class="navbar-brand" href="{{route('home')}}"><img src="/assets/images/logo.png" alt="Logo" width="200"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="{{route('categoria')}}">Categorias</a>
                <a class="nav-link" href="/cadastro">Cadastrar</a>
              </div>
          </div>
          <a href="{{route('carrinho')}}" class="btn btn-lg"><i class="fa fa-shopping-cart text-light"></i></a>
      </div>
  </nav>

 
<div>
  @yield("conteudo")
</div>
  <footer>
    <div class="container text-light">
      <div class="row align-items-start">
        <div class="col">
          <h5><i class="fas fa-exclamation"></i>&nbsp;Sobre</h5>
          <p>Mercado Atacadão, preço baixo é só aqui!</p>
          <p>Somos um mercado voltado para o povo, trazendo sempre o melhor para sua mesa!</p>
          <img src="/assets/images/seguro.png" alt="Site seguro" width="50%">
        </div>
        <div class="col">
          <h5><i class="fas fa-map-marker-alt"></i>&nbsp;Endereço</h5>
          <p>Avenida Visconde de Souza Franco, 625 -
          Mogi Guaçu - SP</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7379.023272483102!2d-46.94881667697713!3d-22.372061669822997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c857b5a5c3ad73%3A0x6cf08b8d4ef09478!2sCentro%2C%20Mogi%20Gua%C3%A7u%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1622470743342!5m2!1spt-BR!2sbr" width="50%"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col">
          <h5><i class="far fa-file-alt"></i>&nbsp;Páginas</h5>
          <ul class="lista">
            <li><i class="fas fa-home"></i><a href="/">Início</a></li>
            <li><i class="fas fa-pen"></i><a href="/cadastrar">Cadastrar</a></li>
            <li><i class="fas fa-sign-in-alt"></i><a href="#">Entrar</a></li>
            <li><i class="fas fa-clone"></i><a href="/categoria">Categoria</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <div class="bg-danger text-light text-center">
    <i class="fas fa-phone-volume"></i> Contato: (19) 9993224652
  </div>
  <div class="bg-dark text-light text-center">
    Todos os direitos reservados - Mercado Atacadão - 2021
  </div>
        {{-- Bootstrap JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/21d3ed0f1a.js" crossorigin="anonymous"></script>
      </body>
</html>
