@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Alterar Produto
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('produto.update', $produto->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $produto->name }}"/>
          </div>
          <div class="form-group">
              <label for="descricao">Descrição</label>
              <input type="text" class="form-control" name="descricao" value="{{ $produto->descricao }}"/>
          </div>
          <div class="form-group">
              <label for="valor">valor</label>
              <input type="number" class="form-control" name="valor" value="{{ $produto->valor }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Alterar Produto</button>
      </form>
  </div>
</div>
@endsection