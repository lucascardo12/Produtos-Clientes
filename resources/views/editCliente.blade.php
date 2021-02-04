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
    Alterar CLiente
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
      <form method="post" action="{{ route('cliente.update', $cliente->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $cliente->name }}"/>
          </div>
          <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="number" class="form-control" name="cpf" value="{{ $cliente->cpf }}"/>
          </div>
          <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" value="{{ $cliente->email }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Alterar Cliente</button>
      </form>
  </div>
</div>
@endsection