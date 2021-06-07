@extends("layout")
@section('conteudo')
   
<div class="container">
  <div class="row">
    <h2 class="my-3">Cadastro</h2>
</div>
    <form action="/cadastrar" method="post" class="p-4" style="background-color: #dddddd">
       @csrf
        <div class="row">
            <div class="form-group col-6">
                <label for="nome">Nome</label>
                <input id="nome" class="form-control" type="text" name="nome">
            </div>
            <div class="form-group col-6">
                <label for="email">E-mail</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group col-6">
                <label for="cpf">CPF</label>
                <input id="cpf" class="form-control" type="text" name="cpf">
            </div>
     <div class="form-group col-6">
                <label for="password">Senha</label>
                <input id="password" class="form-control" type="password" name="password">
            </div>

     <div class="form-group col-7">
                <label for="logradouro">Logradouro</label>
                <input id="logradouro" class="form-control" type="text" name="logradouro">
            </div>
            <div class="form-group col-2">
                <label for="numero">Número</label>
                <input id="numero" class="form-control" type="text" name="numero">
            </div>
            <div class="form-group col-3">
                <label for="complemento">Complemento</label>
                <input id="complemento" class="form-control" type="text" name="complemento">
            </div>

            <div class="form-group col-4">
                <label for="cep">CEP</label>
                <input id="cep" class="form-control" type="text" name="cep">
            </div>
            <div class="form-group col-4">
                        <label for="cidade">Cidade</label>
                <input id="cidade" class="form-control" type="text" name="cidade">
            </div>
            <div class="form-group col-4">
                <label for="estado">Estado</label>
                <input id="estado" class="form-control" type="text" name="estado">
            </div>
            <div class="form-group col-12">
                <input id="cadastrar" class="form-control btn btn-success mt-3" type="submit" name="cadastrar" value="Cadastrar">
            </div>
        </div>
    </form>
  </div>
@endsection     
