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
    Adicionar Cliente
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
      <form method="post" action="{{ route('cliente.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="tel" class="form-control" name="cpf"/>
          </div>
          <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          
          
          <button type="submit" class="btn btn-block btn-danger">Criar Cliente</button>
      </form>
  </div>
</div>
@endsection