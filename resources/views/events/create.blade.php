@extends('layouts.main')

@section('title', 'Livros')

@section('content')
<br>
<h1 class="titulo-pag">Cadastrar Livros </h1>
<br>
<form action="/livros/cadastrar" method="POST" class="row g-3" enctype="multipart/form-data">
    @csrf
  <div class="col-md-6">
    <label for="inputTitulo" class="form-label">Titulo: <em style="color:red;"> <em style="color:red;">*</em></em></label>
    <input type="text" name="titulo" class="form-control" id="inputTitulo" required>
  </div>
  <div class="col-md-6">
    <label for="inputAutor" class="form-label">Autor(a): <em style="color:red;">*</em></label>
    <input type="text" name="autor" class="form-control" id="inputAutor" required>
  </div>
  <div class="col-md-2">
    <label for="inputEdicao" class="form-label">Edição: <em style="color:red;">*</em></label>
    <input type="number" name="edicao" class="form-control" id="inputAEdicao" required>
  </div>
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano: <em style="color:red;">*</em></label>
    <input type="number" name="ano" class="form-control" id="inputAno" required>
  </div>
  <div class="col-2">
    <label for="inputPaginas" class="form-label">N° Páginas: <em style="color:red;">*</em></label>
    <input type="number" name="paginas" class="form-control" id="inputPaginas" required>
  </div>
  <div class="col-md-3">
    <label for="inputCIdioma" class="form-label">Idioma: <em style="color:red;">*</em></label>
    <input type="text" name="idioma" class="form-control" id="inputIdioma" required>
  </div>
  <div class="col-md-3">
    <label for="inputEditora" class="form-label">Editora: <em style="color:red;">*</em></label>
    <input type="text" name="editora" class="form-control" id="inputEditora" required>
  </div>
  <div class="col-md-6">
    <label for="inputImagem" class="form-label">Imagem: <em style="color:red;">*</em></label>
    <input type="file" accept="image/*" name="image" class="form-control" id="inputImage" required>
  </div>
  <div class="col-md-6">
    <label for="inputLink" class="form-label">Link: <em style="color:red;">*</em></label>
    <input type="text" name="linkCompra" class="form-control" id="inputLink" required>
  </div>
  <div class="col-md-12">
    <label for="inputDescricao" class="form-label">Descrição: <em style="color:red;">*</em></label>
    <input type="text-area" name="descricao" class="form-control" id="inputDescricao" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-secondary">Salvar</button>
  </div>
</form>
@endsection