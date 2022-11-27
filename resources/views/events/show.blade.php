@extends('layouts.main')

@section('title', 'Editando livro: '.$livro->titulo)

@section('content')
<div class="container-show">

  <a class="btn btn-outline-secondary btn-action" href="/livros/editar/{{ $livro->id }}">Editar</a>
  <form action="/livros/{{ $livro->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-secondary btn-action">Excluir</button>

  </form>
  <!-- <a class="btn btn-outline-secondary btn-action" href="">Excluir</a> -->
  <br>

  <div class="row show-content">
    <div class="col-4">
      <img src="/images/{{ $livro->image }}" class="image" alt="{{ $livro->titulo }}">
    </div>

    <div class="col-8">
      <h2 class="title">{{ $livro->titulo}}</h2>
      <p>3.000 avaliações</p>

      <div class="content">
        <p>{{$livro->descricao}}</p>
        <a href="{{$livro->linkCompra}}">COMPRE AQUI</a>
      </div>
    </div>
  </div>
</div>
<!-- Avaliação -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="estrelas">
  <p>Avalie este livro:</p>
  <input type="radio" id="cm_star-empty" name="fb" value="" checked/>
  <label for="cm_star-1"><i class="fa"></i></label>
  <input type="radio" id="cm_star-1" name="fb" value="1"/>
  <label for="cm_star-2"><i class="fa"></i></label>
  <input type="radio" id="cm_star-2" name="fb" value="2"/>
  <label for="cm_star-3"><i class="fa"></i></label>
  <input type="radio" id="cm_star-3" name="fb" value="3"/>
  <label for="cm_star-4"><i class="fa"></i></label>
  <input type="radio" id="cm_star-4" name="fb" value="4"/>
  <label for="cm_star-5"><i class="fa"></i></label>
  <input type="radio" id="cm_star-5" name="fb" value="5"/>  
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Digite seu comentário" aria-label="Digite seu comentário" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Salvar</button>
</div>

<p>Avaliações</p>


@endsection